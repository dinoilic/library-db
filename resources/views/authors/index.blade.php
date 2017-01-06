@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Informacije o autorima</h1>
    </div>
    <div class="list-group">
        <a href="{{ route('author.create') }}" class="btn btn-primary btn-block"><span class="fa fa-plus"></span> Dodaj novog autora</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Datum rođenja</th>
                        <th>Datum smrti</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <td>{{ $author->id }}</td>
                            <td>{{ $author->first_name }}</td>
                            <td>{{ $author->last_name }}</td>
                            <td>{{ $author->dob }}</td>
                            <td>{{ $author->dod }}</td>
                            <td class="button-table">
                                <a class="btn btn-primary btn-sm" href="{{ route('author.edit', ['id' => $author->id]) }}">Uredi autora</a>
                            </td>
                            <td class="button-table">
                                {{ Form::open(['method' => 'DELETE', 'route' => ['author.destroy', $author->id]]) }}
                                    {{ Form::hidden('id', $author->id) }}
                                    {{ Form::submit('Obriši autora', ['class' => 'btn btn-sm btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $authors->links() }}
        </div>
    </div>
@endsection
