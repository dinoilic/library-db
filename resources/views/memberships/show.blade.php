@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h2>Član: <small>{{ $user->first_name }} {{ $user->last_name }}</small></h2>
        </div>
        <div class="col-md-7">
            <h2>Članarina: <small>od {{ $membership->start_date }} do {{ $membership->end_date }}</small></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>Informacije o članarini</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Početak članarine</th>
                        <th>Kraj članarine</th>
                        <th>Maksimalno knjiga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $membership->start_date }}</td>
                        <td>{{ $membership->end_date }}</td>
                        <td>{{ $membership->books }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h3>Opcije</h3>
            <div class="list-group">
                <a href="{{ route('membership.edit', ['id' => $membership->id]) }}" class="btn btn-block btn-primary">Uredi trenutnu članarinu</a>
                {{ Form::open(['method' => 'DELETE', 'route' => ['membership.destroy', $membership->id]]) }}
                    {{ Form::hidden('id', $membership->id) }}
                        {{ Form::submit('Obriši članarinu', ['class' => 'btn btn-block btn-danger']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <h3>Posuđene knjige</h3>
    <div class="row">
        @foreach($loanedBooks as $book)
            <div class="col-md-3 text-center book">
                <img src="http://covers.openlibrary.org/b/isbn/{{ $book->isbn }}-M.jpg" alt="Cover za knjigu {{ $book->name }}">
                <h4>{{ $book->name }}</h4>
                <p>Posuđeno na dan: {{ $book->pivot->date_loaned }}</p>
                <p>Rok vraćanja: {{ $book->pivot->date_return }}</p>
                @if($book->pivot->date_returned != NULL)
                    <p>Vraćeno na dan: {{ $book->pivot->date_returned }}</p>
                @else
                    <p class="red">Nije vraćeno</p>
                @endif
            </div>
        @endforeach
    </div>
@endsection
