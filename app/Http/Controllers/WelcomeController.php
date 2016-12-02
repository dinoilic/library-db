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
        $posts = Post::paginate(5);

        $endOfMonth = Carbon::now()->endOfMonth()->format('Y-m-d');
        $startOfMonth = Carbon::now()->startOfMonth()->format('Y-m-d');

        $books = Book::all();

        $maxLoans = 0;
        $bestBook = null;

        foreach($books as $book)
        {
        	$loans = $book->users()->whereBetween('date_loaned', [$startOfMonth, $endOfMonth])->count();
        	if($loans > $maxLoans)
        	{
        		$maxLoans = $loans;
        		$bestBook = $book;
        	}
        }

        return view('welcome', compact('posts', 'bestBook'));
    }
}
