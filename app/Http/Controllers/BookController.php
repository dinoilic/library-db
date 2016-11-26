<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Genre;

class BookController extends Controller
{
    /**::paginate(6)
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $authors = Author::all();
        $genres = Genre::all();

        $author_ids = $request->input('author');
        $genre_ids = $request->input('genre');

        if(isset($author_ids) && isset($genre_ids))
        {
            $books = \DB::table('books')
                    ->join('book_genre', 'books.id', '=', 'book_genre.book_id')
                    ->join('author_book', 'books.id', '=', 'author_book.book_id')
                    ->where('genre_id', $genre_ids)
                    ->where('author_id', $author_ids)
                    ->select('name', 'description', 'isbn')
                    ->distinct()
                    ->get();
        }
        else if(isset($author_ids))
        {
            $books = \DB::table('books')
                    ->join('book_genre', 'books.id', '=', 'book_genre.book_id')
                    ->join('author_book', 'books.id', '=', 'author_book.book_id')
                    ->where('author_id', $author_ids)
                    ->select('name', 'description', 'isbn')
                    ->distinct()
                    ->get();
        }
        else if(isset($genre_ids))
        {
            $books = \DB::table('books')
                    ->join('book_genre', 'books.id', '=', 'book_genre.book_id')
                    ->join('author_book', 'books.id', '=', 'author_book.book_id')
                    ->where('genre_id', $genre_ids)
                    ->select('name', 'description', 'isbn')
                    ->distinct()
                    ->get();
        }
        else
        {
            $books = Book::all();
        }

        return view('books', compact('books', 'authors', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
