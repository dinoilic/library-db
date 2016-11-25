<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membership;
use App\User;
use Auth;
use Carbon\Carbon;

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
        foreach($memberships as $membership)
        {
            $membership->is_valid = Carbon::now()->between(Carbon::createFromFormat('Y-m-d', $membership->start_date)->startOfDay(), Carbon::createFromFormat('Y-m-d', $membership->end_date)->startOfDay());  
        }

        $books = Auth::user()->loans()->orderBy('date_loaned', 'DESC')->whereNull('date_returned')->get();

        return view('home', compact('memberships', 'books'));

    }
}
