<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $authors = Author::paginate(10);

        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('authors.create');
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
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'dob' => 'required|date',
            'dod' => 'date',
        ]);
        $author = new Author();

        $author->first_name = $request->input('firstName');
        $author->last_name = $request->input('lastName');
        $author->dob = $request->input('dob');
        if($request->input('dod') != null)
        {
            $author->dod = $request->input('dod');
        }
        else
        {
            $author->dod = null;
        }

        $author->save();

        return redirect()->route('author.index');
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
        $author = Author::findOrFail($id);

        return view('authors.edit', compact('author'));
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
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'dob' => 'required|date',
            'dod' => 'date',
        ]);
        $author = Author::findOrFail($id);

        $author->first_name = $request->input('firstName');
        $author->last_name = $request->input('lastName');
        $author->dob = $request->input('dob');
        if($request->input('dod') != null)
        {
            $author->dod = $request->input('dod');
        }
        else
        {
            $author->dod = null;
        }

        $author->save();

        return redirect()->route('author.index');
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
        try {
            Author::destroy($id);
        } catch ( \Illuminate\Database\QueryException $e) {
            return response()->view('errors.106');
        }

        return redirect()->route('author.index');
    }
}
