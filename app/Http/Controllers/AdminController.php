<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Project;
use App\User;
use App\Company;
use App\ProjectUser;
use App\Task;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       // $this->middleware('auth:admin');
       $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::User()->role_id ==  1 && Auth::check() ) {
            $countclients = DB::table('users')->count();
            $countprojects = DB::table('projects')->count();
             $projects = DB::select('select * from projects');
           // $pass  = array( $countclients,$countprojects,$projects );
             $clients = DB::select('select * from users ');
            $countclients = DB::table('users')->count();
            // return view('admins.home',[$countclients,$countclients]);
             return view('admins.home', ['clients'=> $clients], ['projects'=> $projects])->with('countprojects',$countprojects);
     } else {
        return back();
     }


    }
    public function ongoingseocampaigns(){
        if (Auth::User()->role_id ==  1 && Auth::check() ) {
        $projects = DB::select('select * from projects  projects where status != 3');
       // $tasks = Task::all()->where('project_id',$projects->id);
       $tasks = Task::all();
        return view('admins.Ongoing-SEO-Campaigns',['Tasks',$tasks])->with('projects', $projects);
        }
    }
    public function expiredservices(){
        if (Auth::User()->role_id ==  1 && Auth::check() ) {
       $expiredservices = DB::select('select * from projects where status = 3');
        return view('admins.expired-services')->with('expiredservices',$expiredservices);
        }
    }
    public function activeclient()
    {
        if (Auth::User()->role_id ==  1 && Auth::check() ) {
        $clients = DB::select('select * from users ');
        $projects = DB::select('select * from projects  projects where status != 3 or status != 2');
        //$tasks = Task::all()->where('project_id',$projects->id);
        $tasks = Task::all();

        dd($tasks);
        return  view('admins.active-clients',['clients'=> $clients],['Tasks',$tasks])->with('projects', $projects);
        }
    }
    public function showproject($id){
        if (Auth::User()->role_id ==  1 && Auth::check() ) {
        $project = Project::find($id);
        $comments = $project->comments;
        return view('projects.show', ['project'=>$project, 'comments'=> $comments ]);
        }
    }

    public function downloadproject($id){
        if (Auth::user()->role_id ==  1  ||Auth::check() ) {
        $dl = Project::find($id);
        $filepath = '../../../public/storage/projects';
        return Storage::download($dl->$filepath,$dl->file);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $projects = DB::select('select * from projects');
        // return  view('admins.home')->with('projects', $projects);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
