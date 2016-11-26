@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <form action="{{ url('book') }}" method="GET">
                {{ csrf_field() }}
                <h3>Filteri</h3>
                <hr>
                <h4>Autori</h4>
                @foreach($authors as $author)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="author[]" value="{{ $author->id }}">
                            {{ $author->first_name }} {{ $author->last_name }}
                        </label>
                    </div>
                @endforeach

                <h4>Zanrovi</h4>
                @foreach($genres as $genre)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="genre[]" value="{{ $genre->id }}">
                            {{ $genre->display_name }}
                        </label>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Pretrazi</button>
            </form>
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
                        <hr>
                        <p class="text-justify">{{ str_limit($book->description, 500) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection