@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Informacije o zanrovima</h1>
    </div>
    <div class="list-group">
        <a href="{{ route('genre.create') }}" class="btn btn-primary btn-block"><span class="fa fa-plus"></span> Dodaj novi zanr</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Ime za prikaz</th>
                        <th>Uredivanje</th>
                        <th>Brisanje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($genres as $genre)
                        <tr>
                            <td>{{ $genre->id }}</td>
                            <td>{{ $genre->name }}</td>
                            <td>{{ $genre->display_name }}</td>
                            <td class="button-table">
                                <a class="btn btn-primary btn-sm" href="{{ route('genre.edit', ['id' => $genre->id]) }}">Uredi zanr</a>
                            </td>
                            <td class="button-table">
                                {{ Form::open(['method' => 'DELETE', 'route' => ['genre.destroy', $genre->id]]) }}
                                    {{ Form::hidden('id', $genre->id) }}
                                    {{ Form::submit('Obrisi zanr', ['class' => 'btn btn-sm btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $genres->links() }}
        </div>
    </div>
@endsection
