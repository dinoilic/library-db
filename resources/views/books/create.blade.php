@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Dodavanje nove knjige</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'POST', 'route' => ['book.store']]) }}
                <div class="form-group">
                    {{ Form::label('name', 'Ime knjige') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('isbn', 'ISBN') }}
                    {{ Form::text('isbn', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('description', 'Opis knjige') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Autori</h3>
                        <hr>
                        @foreach($authors as $author)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="authors[]" value="{{ $author->id }}">
                                    {{ $author->first_name }} {{ $author->last_name }}
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
                                    <input type="checkbox" name="genres[]" value="{{ $genre->id }}">
                                    {{ $genre->display_name }}
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
