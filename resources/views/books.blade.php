@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <h3>Filteri</h3>
            <hr>
            <h4>Autori</h4>
            <ul>
                @foreach($authors as $author)
                    <li>{{ $author->first_name }} {{ $author->last_name }}</li>
                @endforeach
            </ul>
            <h4>Zanrovi</h4>
            <ul>
                @foreach($genres as $genre)
                    <li>{{ $genre->display_name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-9">
            <h3>Knjige</h3>
            <hr>
            @foreach($books as $book)
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="http://covers.openlibrary.org/b/isbn/{{ $book->isbn }}-M.jpg">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $book->name }}</h4>
                        <p>{{ str_limit($book->description, 500) }}</p>
                    </div>
                </div>
            @endforeach
            {{ $books->links() }}
        </div>
    </div>
@endsection