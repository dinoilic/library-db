@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Uredujete: <small>{{ $book->name }}</small></h1>
    </div>

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @endforeach
    @endif

    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'PUT', 'route' => ['book.update', $book->id]]) }}
                {{ Form::hidden('id', $book->id) }}
                <div class="form-group">
                    {{ Form::label('name', 'Ime knjige') }}
                    {{ Form::text('name', $book->name, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('isbn', 'ISBN') }}
                    {{ Form::text('isbn', $book->isbn, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('description', 'Opis knjige') }}
                    {{ Form::textarea('description', $book->description, ['class' => 'form-control']) }}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Autori</h3>
                        <hr>
                        @foreach($authors as $author)
                            <div class="checkbox">
                                <label>
                                    @if($book->authors()->find($author->id) != null)
                                        <input type="checkbox" checked name="authors[]" value="{{ $author->id }}">
                                    {{ $author->first_name }} {{ $author->last_name }}
                                    @else
                                        <input type="checkbox" name="authors[]" value="{{ $author->id }}">
                                    {{ $author->first_name }} {{ $author->last_name }}
                                    @endif
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                    <h3>Zanrovi</h3>
                        <hr>
                        @foreach($genres as $genre)
                            <div class="checkbox">
                                <label>
                                    @if($book->genres()->find($genre->id) != null)
                                        <input type="checkbox" checked name="genres[]" value="{{ $genre->id }}">
                                    {{ $genre->display_name }}
                                    @else
                                        <input type="checkbox" name="genres[]" value="{{ $genre->id }}">
                                    {{ $genre->display_name }}
                                    @endif
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection
