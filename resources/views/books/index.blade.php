@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <h3>Filteri</h3>
            <hr>
            <form action="{{ url('book') }}" method="GET">
                <h4>Zanrovi</h4>
                @foreach($genres as $genre)
                    <div class="radio">
                        <label>
                        <input type="radio" name="genre" value="{{ $genre->name }}">
                            {{ $genre->display_name }}
                        </label>
                    </div>
                @endforeach
                <input type="submit" class="btn btn-primary" value="Pretrazi">
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
                        <h4 class="media-heading">{{ $book->name }} <span class="pull-right">
                        @if($book->available > 0)
                            <span class="fa fa-check green"></span> Dostupno
                        @else
                            <span class="fa fa-times red"></span> Nije dostupno
                        @endif
                        </span></h4>
                        <h5>Kopije: {{ $book->copies }}</h5>
                        <h5>Dostupno kopija: {{ $book->available }}</h5>
                        <hr>
                        <h4>Opis knjige</h4>
                        <p class="text-justify">{{ str_limit($book->description, 500) }}</p>
                    </div>
                </div>
                <hr>
            @endforeach
            {{ $books->links() }}
        </div>
    </div>
@endsection