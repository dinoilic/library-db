<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon;
use App\Book;
use App\Membership;

class LoanController extends Controller
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
        $allUsers = User::paginate(10);

        foreach($allUsers as $user)
        {
            $user->books_unreturned = $user->loans()
                                        ->whereNull('date_returned')
                                        ->count();
        }

        return view('loans.index', compact('allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $allUsers = User::all();
        $validUsers = [];

        foreach($allUsers as $user)
        {
            $m = $user->memberships()->orderBy('start_date', 'DESC')->first();
            if($m != NULL)
            {
                $start_memb = $m->start_date;
                $end_memb = $m->end_date;
                $books_limit = $m->books;

                $books_loaned = $user->loans()
                                        ->whereBetween('date_loaned', [$start_memb, $end_memb])
                                        ->whereNull('date_returned')
                                        ->count();

                $books_left = $books_limit - $books_loaned;
                if($books_left > 0)
                {
                    $validUsers[] = $user;
                }
            }
        }

        $bookId = $request->input('bookId');
        $book = Book::where('id', $bookId)->firstOrFail();

        return view('loans.create', compact('book', 'validUsers'));
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
            'loanLength' => 'required|between:30,45|numeric'
        ]);

        $book = Book::where('id', $request->input('bookId'))->firstOrFail();
        $user = User::where('id', $request->input('userId'))->firstOrFail();

        $test = $user->loans()->wherePivot('book_id', $book->id)->wherePivot('date_loaned', Carbon\Carbon::now()->toDateString())->first();

        if($test != NULL)
        {
            return redirect()->route('book.index');
        }

        $user->loans()->attach($book, ['date_loaned' => Carbon\Carbon::now(), 'date_return' => Carbon\Carbon::now()->addDays($request->input('loanLength'))]);

        return redirect()->route('loan.show', ['id' => $request->input('userId')]);
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
        $user = User::findOrFail($id);
        $returned_books = $user->loans()->whereNotNull('date_returned')->get();
        $unreturned_books = $user->loans()->whereNull('date_returned')->get();

        return view('loans.show', compact('returned_books', 'unreturned_books', 'user'));
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
    }

    /**
     * User returned a book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function returnBook(Request $request, $id)
    {
        //
        $loan = User::findOrFail($request->input('userId'))->loans()->wherePivot('id', $id)->firstOrFail();

        $loan->pivot->date_returned = Carbon\Carbon::now();
        $loan->pivot->save();

        return redirect()->route('loan.show', ['id' => $request->input('userId')]);
    }

    /**
     * User extended a book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function extendBook(Request $request, $id)
    {
        //

        $loan = User::findOrFail($request->input('userId'))->loans()->wherePivot('id', $id)->firstOrFail();

        $date = Carbon\Carbon::parse($loan->pivot->date_return);
        
        $loan->pivot->date_return = $date->addMonth(1);
        $loan->pivot->save();

        return redirect()->route('loan.show', ['id' => $request->input('userId')]);
    }
}
