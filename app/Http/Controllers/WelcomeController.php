<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Book;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    // Controller for the welcome page

    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(6);

        $endOfMonth = Carbon::now()->endOfMonth()->toDateString();
        $startOfMonth = Carbon::now()->startOfMonth()->toDateString();

        $books = Book::all();

        $maxLoans = 0;
        $bestBook = null;

        foreach($books as $book)
        {
            $loans = $book->users()->whereBetween('date_loaned', [$startOfMonth, $endOfMonth])->count();
            $book->loans_month = $loans;
            if($loans > $maxLoans)
            {
                $maxLoans = $loans;
                $bestBook = $book;
            }
        }

        $books = $books->sortByDesc('loans_month');

        return view('welcome', compact('posts', 'books'));
    }
}
