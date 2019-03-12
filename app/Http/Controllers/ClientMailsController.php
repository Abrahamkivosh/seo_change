<?php

namespace App\Http\Controllers;

use App\ClientMails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use App\User;
class ClientMailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Auth::check() ){


            $mails = ClientMails::where('user_id', Auth::User()->id)->paginate(4);
           if (Auth::User()->role_id == 1) {

               return view('admins.mail.mail-inbox')->with('mails',$mails);
           } else {
            return view('clients.mail.index', ['mails'=> $mails]);
           }



        }
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::User()->role_id == 1) {
            return view('admins.mail.mail-compose');
        }else{


        return view('clients.mail.create');
        }

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

        if(Auth::check()){
            $mail = ClientMails::create([
                'to' => $request->input('to'),
                'subject' => $request->input('subject'),
                'body' => $request->input('body'),
                'user_id' => Auth::user()->id
            ]);


            if($mail){
                if (Auth::User()->role_id == 1) {
                return redirect()->view('admins.mail.mail-inbox')
                ->with('success' , 'Email was sent  successfully');
                }else{
                return view('clients.mail.index')->with('success' , 'Email was sent  successfully');
                }
            }

        }

            return back()->withInput()->with('errors', 'Error sending your email');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientMails  $clientMails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$mail = ClientMails::find($clientMails->id);
        $mail = ClientMails::find($id);
        if (Auth::User()->role_id == 1) {

            return view('admins.mail.mail-single', ['mail'=>$mail]);

        }

        return view('clients.mail.show', ['mail'=>$mail]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientMails  $clientMails
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientMails $clientMails)
    {
        //

        //
        $mail = ClientMails::find($clientMails->id);
        if (Auth::User()->role_id == 1) {
            return view('admins.mail.mail-single', ['mail'=>$mail]);
        }

        return view('clients.mail.edit', ['mail'=>$mail]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientMails  $clientMails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientMails $clientMails)
    {
        //
        $mailUpdate = Company::where('id', $mail->id)
                                ->update([
                                        'to'=> $request->input('to'),
                                        'subject'=> $request->input('subject'),
                                        'body'=> $request->input('body')
                                ]);

      if($mailUpdate){
        if (Auth::User()->role_id == 1) {
            return redirect()->route('admins.mail.mail-single', ['mail'=> $mail->id])
          ->with('success' , 'Mail send successfully');
        }

          return redirect()->route('clients.mail.show', ['mail'=> $mail->id])
          ->with('success' , 'Mail send successfully');
      }
      //redirect
      return back()->withInput();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientMails  $clientMails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientMails $clientMails)
    {
        //
    }
}
