<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membership;
use App\User;
use Auth;
use Carbon\Carbon;
use DB;
use Lava;

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
        // Get 5 most recent memberships
        $memberships = Auth::user()
                            ->memberships()
                            ->orderBy('start_date', 'DESC')
                            ->limit(10)
                            ->get();

        foreach($memberships as $membership)
        {
            $membership->is_valid = Carbon::now()->between(Carbon::createFromFormat('Y-m-d', $membership->start_date)->startOfDay(), Carbon::createFromFormat('Y-m-d', $membership->end_date)->startOfDay());
            $books_loaned = Auth::user()->loans()
                                        ->whereBetween('date_loaned', [$membership->start_date, $membership->end_date])
                                        ->whereNull('date_returned')
                                        ->count();
            $membership->books = $membership->books - $books_loaned;
        }


        $books = Auth::user()
                        ->loans()
                        ->orderBy('date_loaned', 'DESC')
                        ->whereNull('date_returned')
                        ->get();

        $yearBooks = DB::select("SELECT MONTH(date_loaned) AS month, COUNT(*) AS count FROM book_user WHERE YEAR(date_loaned) = ".Carbon::now()->year." GROUP BY MONTH(date_loaned)");

        return view('home', compact('memberships', 'books', 'yearBooks'));
    }
}
