@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Clan: <small>{{ $user->first_name }} {{ $user->last_name }}</small></h1>
        <h1>Clanarina: <small>od {{ $membership->start_date }} do {{ $membership->end_date }}</small></h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>Informacije o clanarini</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Pocetak clanarine</th>
                        <th>Kraj clanarine</th>
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
                <a href="{{ route('membership.edit', ['id' => $membership->id]) }}" class="list-group-item"><span class="fa fa-edit"></span> Uredi trenutnu clanarinu</a>
                {{ Form::open(['method' => 'DELETE', 'route' => ['membership.destroy', $membership->id]]) }}
                    {{ Form::hidden('id', $membership->id) }}
                    @if($user->hasLoans == true)
                        {{ Form::submit('Obrisi clanarinu', ['class' => 'btn disabled btn-block btn-danger']) }}
                    @else
                        {{ Form::submit('Obrisi clanarinu', ['class' => 'btn btn-block btn-danger']) }}
                    @endif
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <h3>Posudene knjige</h3>
    <div class="row">
        @foreach($loanedBooks as $book)
            <div class="col-md-3 text-center book">
                <img src="http://covers.openlibrary.org/b/isbn/{{ $book->isbn }}-M.jpg" alt="Cover za knjigu {{ $book->name }}">
                <h4>{{ $book->name }}</h4>
                <p>Posudeno na dan: {{ $book->pivot->date_loaned }}</p>
                <p>Rok vracanja: {{ $book->pivot->date_return }}</p>
                @if($book->pivot->date_returned != NULL)
                    <p>Vraceno na dan: {{ $book->pivot->date_returned }}</p>
                @else
                    <p class="red">Nije vraceno</p>
                @endif
            </div>
        @endforeach
    </div>
@endsection
