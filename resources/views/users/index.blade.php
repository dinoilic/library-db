@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Informacije o korisnicima</h1>
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
                            <td><a href="{{ route('user.show', ['id' => $user->id]) }}"><span class="fa fa-info blue"></span></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
