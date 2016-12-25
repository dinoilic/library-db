<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membership;
use App\User;
use Carbon\Carbon;

class MembershipController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:employee');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $memberships = Membership::paginate(10);

        foreach($memberships as $membership)
        {
            $membership->is_valid = Carbon::now()->between(Carbon::createFromFormat('Y-m-d', $membership->start_date)->startOfDay(), Carbon::createFromFormat('Y-m-d', $membership->end_date)->startOfDay());
            $books_loaned = $membership->user()->first()->loans()
                                        ->whereBetween('date_loaned', [$membership->start_date, $membership->end_date])
                                        ->whereNull('date_returned')
                                        ->count();
            $membership->books_left = $membership->books - $books_loaned;
        }

        return view('memberships.index', compact('memberships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $allUsers = User::select('id', 'first_name', 'last_name')->get();

        return view('memberships.create', compact('allUsers'));
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
        $this->validate($request, [
            'startDate' => 'required|date|after:yesterday',
            'endDate' => 'required|date|after:startDate',
            'books' => 'numeric|between:3,10',
        ]);
        $membership = new Membership();

        $membership->start_date = $request->input('startDate');
        $membership->end_date = $request->input('endDate');
        $membership->books = $request->input('books');
        $membership->user_id = $request->input('userId');

        try {
            $membership->save();
        } catch ( \Illuminate\Database\QueryException $e) {
            return response()->view('errors.107');
        }
        
        return redirect()->route('membership.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $membership = Membership::findOrFail($id);
        $user = User::findOrFail($membership->user_id);

        $loanedBooks = $user->loans()->whereBetween('date_loaned', [$membership->start_date, $membership->end_date])->get();

        foreach($user->loans()->get() as $loan)
        {
            if($loan->date_returned == null)
            {
                $user->hasLoans = true;
            }
        }

        return view('memberships.show', compact('membership', 'user', 'loanedBooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $membership = Membership::findOrFail($id);
        $user = User::findOrFail($membership->user_id);

        return view('memberships.edit', compact('membership', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'startDate' => 'required|date|after:yesterday',
            'endDate' => 'required|date|after:startDate',
            'books' => 'numeric|between:3,10',
        ]);
        $membership = Membership::findOrFail($id);

        $membership->start_date = $request->input('startDate');
        $membership->end_date = $request->input('endDate');
        $membership->books = $request->input('books');

        $membership->save();

        return redirect()->route('membership.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Membership::destroy($id);

        return redirect()->route('membership.index');
    }
}
