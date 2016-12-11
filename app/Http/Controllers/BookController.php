<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Genre;
use Auth;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:member|employee');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $authors = Author::all();
        $genres = Genre::all();

        $genre = $request->input('genre');

        if(isset($genre))
        {
            $books = Genre::where('name', $genre)->firstOrFail()->books()->paginate(5);
        }
        else
        {
            $books = Book::paginate(5);
        }

        foreach($books as $book)
        {
            $loaned_books = $book->users()->whereNull('date_returned')->count();
            $book->available = $book->copies - $loaned_books;
        }

        return view('books.index', compact('books', 'authors', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!(Auth::user()->hasRole('employee'))) abort(404);
        $authors = Author::all();
        $genres = Genre::all();

        return view('books.create', compact('authors', 'genres'));
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
            'name' => 'required|max:255|unique:books',
            'isbn' => 'required|between:10,13|unique:books',
            'description' => 'required',
            'authors' => 'required',
            'genres' => 'required',
        ]);
        $book = new Book();
        $book->name = $request->input('name');
        $book->isbn = $request->input('isbn');
        $book->description = $request->input('description');

        $book->save();
        
        // Attaching new ones
        foreach($request->input('authors') as $author)
        {
            $book->authors()->attach($author);
        }

        // Attaching new genres
        foreach($request->input('genres') as $genre)
        {
            $book->genres()->attach($genre);
            
        }

        return redirect()->route('book.show', ['id' => $book->id]);
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
        $book = Book::findOrFail($id);
        $authors = $book->authors()->get();
        $genres = $book->genres()->get();

        return view('books.show', compact('book', 'authors', 'genres'));
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
        if(!(Auth::user()->hasRole('employee'))) abort(404);
        $book = Book::findOrFail($id);
        $authors = Author::all();
        $genres = Genre::all();

        return view('books.edit', compact('book', 'authors', 'genres'));
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
            'name' => 'required|max:255|unique:books,name,'.$id,
            'isbn' => 'required|between:10,13|unique:books,isbn,'.$id,
            'description' => 'required',
            'authors' => 'required',
            'genres' => 'required',
        ]);
        $book = Book::findOrFail($id);
        $book->name = $request->input('name');
        $book->isbn = $request->input('isbn');
        $book->description = $request->input('description');

        $book->save();

        // Detaching all authors
        foreach($book->authors()->get() as $author)
        {
            $book->authors()->detach($author);
        }
        // Attaching new ones
        foreach($request->input('authors') as $author)
        {
            $book->authors()->attach($author);
        }

        // Detaching all genres
        foreach($book->genres()->get() as $genre)
        {
            $book->genres()->detach($genre);
        }
        // Attaching new genres
        foreach($request->input('genres') as $genre)
        {
            $book->genres()->attach($genre);
            
        }

        return redirect()->route('book.show', ['id' => $id]);
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
        Book::destroy($id);

        return redirect()->route('book.index');
    }
}
