<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membership;
use App\User;
use Auth;

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
        $memberships = Auth::user()->memberships()->orderBy('start_date', 'DESC')->limit(5)->get();
        $books = Auth::user()->loans()->orderBy('date_loaned', 'DESC')->whereNull('date_returned')->get();
        return view('home', compact('memberships', 'books'));

    }
}
