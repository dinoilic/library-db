@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Informacije o korisnicima</h1>
    </div>
    <div class="list-group">
        <a href="{{ route('user.create') }}" class="btn btn-primary btn-block"><span class="fa fa-plus"></span> Dodaj novog korisnika</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>e-mail</th>
                        <th>Detalji</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allUsers as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="button-table">
                                <a class="btn btn-sm btn-primary" href="{{ route('user.show', ['id' => $user->id]) }}">Detalji o korisniku</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $allUsers->links() }}
        </div>
    </div>
@endsection
