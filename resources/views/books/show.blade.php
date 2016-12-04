@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $book->name }}</h3>
            <hr>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-3">
            <img class="media-object" src="http://covers.openlibrary.org/b/isbn/{{ $book->isbn }}-L.jpg">
            @if(Auth::user()->hasRole('employee'))
                <div class="list-group">
                    <div class="list-group-item">
                        <a href="{{ route('book.edit', ['id' => $book->id]) }}"><span class="fa fa-edit"></span> Uredi knjigu</a>
                    </div>
                    <div class="list-group-item">
                        {{ Form::open(['method' => 'DELETE', 'route' => ['book.destroy', $book->id]]) }}
                            {{ Form::hidden('id', $book->id) }}
                            {{ Form::submit('Obrisi knjigu', ['class' => 'btn btn-block btn-danger']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            @endif
        </div>  
        <div class="col-md-9">
            <h3>Opis</h3>
            <p class="text-justify">{{ $book->description }}</p>
            <h3>Autori</h3>
            <div class="list-group">
                @foreach($authors as $author)
                    <div class="list-group-item">
                        {{ $author->first_name }} {{ $author->last_name }}
                    </div>
                @endforeach
            </div>
            <h3>Zanrovi</h3>
            <div class="list-group">
                @foreach($genres as $genre)
                    <div class="list-group-item">
                        {{ $genre->display_name }}
                    </div>
                @endforeach
            </div>
        </div>  
    </div>
@endsection