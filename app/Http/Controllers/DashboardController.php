<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

// interface for dashboard for each of user registering in 

class DashboardController extends Controller
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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);       // take all datas from user based on ID
        return view('dashboard')->with('posts', $user->posts); // take out all the posts user has
    }
}
