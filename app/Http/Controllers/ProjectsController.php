<?php

namespace App\Http\Controllers;

use App\Project;
use App\Company;
use App\ProjectUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage ;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         //
         if( Auth::check() ){
            $projectscount = DB::table('projects')->count();

             if(Auth::user()->role_id == 1){
                $projects =Project::all();
                return view('projects.index', ['projects'=> $projects],['project'=>$projectscount]);


             }else if (Auth::user()->role_id == 3){
                $projects = Project::where('user_id', Auth::user()->id)->get();
                return view('clients.projects.index', ['projects'=> $projects],['project'=>$projectscount]);

             }else {
                # code...
             return view('home', ['projects'=> $projects],['project'=>$projectscount]);

            }
         }
         return view('auth.login');
     }


     public function adduser(Request $request){
         //add user to projects

         //take a project, add a user to it
         $project = Project::find($request->input('project_id'));
         if(Auth::user()->id == $project->user_id || Auth::user()->role_id == 1 ){

         $user = User::where('email', $request->input('email'))->first(); //single record

         //check if user is already added to the project
         $projectUser = ProjectUser::where('user_id',$user->id)
                                    ->where('project_id',$project->id)
                                    ->first();

            if($projectUser){
                //if user already exists, exit

                return response()->json(['success' ,  $request->input('email').' is already a member of this project']);

            }


            if($user && $project){

                $project->users()->attach($user->id);

                     return response()->json(['success' ,  $request->input('email').' was added to the project successfully']);

                    }

         }

         return redirect()->route('clients.projects.show', ['project'=> $project->id])
         ->with('errors' ,  'Error adding user to project');



     }



     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create( $company_id = null )
     {

            $companies = Company::all();

         return view('clients.projects.create',['companies'=>$companies]);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
         $this ->validate($request,[
            'file' => 'nullable|max:1900'
         ]);
         if ($request->hasFile('file')) {
             #get file with Storage::extension(filePath);
             $filenamewithex = $request->file('file')->getClientOriginalName();
             //get file name file
             $filename = pathinfo($filenamewithex, PATHINFO_FILENAME);
             //get just ext
             $extension = $request -> file('file')->getClientOriginalExtension();
             //file to store
             $filetostore = $filename.'_'.time().'.'.$extension ;
             //upload file #endregion
             $path = $request -> file('file')->storeAs('path(public/projects)',$filetostore) ;


         } else {
             # code...
             $filetostore = 'noproject';
         }


             $project = Project::create([
                 'name' => $request->input('name'),
                 'website' => $request->input('website'),
                 'status' => $request ->input('status'),
                 'category' => $request->input('category'),
                 'file' => $filetostore ,
                 'company_id' => $request->input('company_id'),
                 'user_id' => Auth::user()->id

             ]);

             if($project){
                if (Auth::user()->role_id ==  1  ) {
                    //dd($project);
                    return view('admins.home',['project',$project->id])->with('project' , $project->id);
                    return redirect()->route('projects.store')->with('project' , $project->id);
                }

                 return view('clients.projects.show')->with('project' , $project->id);
             }

             return back()->withInput()->with('errors', 'Error creating new project');

     }



     /**
      * Display the specified resource.
      *
      * @param  \App\project  $project
      * @return \Illuminate\Http\Response
      */
     public function show(Project $project)
     {
        $project = Project::find($project->id);
        if(Auth::user()->role_id == 1){
            $comments = $project->comments;
            return view('projects.show', ['project'=>$project, 'comments'=> $comments ]);
         } else {
            $comments = $project->comments;
         return view('clients.projects.show', ['project'=>$project, 'comments'=> $comments ]);
         }
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\project  $project
      * @return \Illuminate\Http\Response
      */
     public function edit(Project $project)
     {
        $project = Project::find($project->id);
         if(Auth::user()->role_id == 1){
            return view('projects.edit', ['project'=>$project]);
         } else {
            return view('clients.projects.edit', ['project'=>$project]);
         }




     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\project  $project
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, project $project)
     {

       //save data

       $projectUpdate = Project::where('id', $project->id)
                                 ->update([
                                         'name'=> $request->input('name'),
                                         'category'=> $request->input('category'),
                                         'status'=> $request->input('status'),
                                 ]);

       if($projectUpdate){
           return redirect()->route('clients.projects.show', ['project'=> $project->id])
           ->with('success' , 'project updated successfully');
       }
       //redirect
       return back()->withInput();



     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\project  $project
      * @return \Illuminate\Http\Response
      */
     public function destroy(Project $project)
     {
         //

         $findproject = Project::find( $project->id);
         if($findproject->delete()){

             //redirect
             if(Auth::user()->role_id == 1){
                return redirect()->route('projects.index')
                ->with('success' , 'project deleted successfully');
             }
             return redirect()->route('clients.projects.index')
             ->with('success' , 'project deleted successfully');

         }

         return back()->withInput()->with('error' , 'project could not be deleted');


     }

     public function download(project $project){
         $dl = Project::find($project->id);

         $pathToFile = storage_path('app/path(public/public/projects/' . $dl->file);
         return response()->download($pathToFile );

     }
}
