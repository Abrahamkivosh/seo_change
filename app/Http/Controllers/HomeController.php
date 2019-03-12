<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use App\AdminMail;
use App\Admin;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::all()->where('role_id',1);
       // dd($admins);
        if (Auth::user()->role_id ==  1  ) {
           // echo "This is true";

            return redirect()->route('admin.dashboard');
        }else{
            return view('home');
        }

    }
    public function dashboard(){
        return view('clients.dashboard');
    }
}

