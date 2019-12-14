<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->admin == 0){
            return redirect()->action('InputController@index');
        } else {
            $users['users'] = \App\User::all();
            return view('index');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
