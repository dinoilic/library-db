@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Korisnik: <small>{{ $user->first_name }} {{ $user->last_name }}</small></h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>Informacije o korisniku</h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>e-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h3>Opcije</h3>
            <div class="list-group">
                <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="list-group-item"><span class="fa fa-edit"></span> Uredi trenutnog korisnika</a>
                <a href="{{ route('user.create') }}" class="list-group-item"><span class="fa fa-plus"></span> Dodaj novog korisnika</a>
                {{ Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) }}
                    {{ Form::hidden('id', $user->id) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Uloge</h3>
            <ul>
                @foreach($user->roles as $role)
                    <li>{{ $role->display_name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
