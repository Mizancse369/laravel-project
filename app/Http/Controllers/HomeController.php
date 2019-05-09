<?php

namespace App\Http\Controllers;
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
    public  function about(){
        return view('about');
    }   public  function content(){
        return view('content');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_all = User::all();
     return view('home', compact('user_all'));

    }
}
