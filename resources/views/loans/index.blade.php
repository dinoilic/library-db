@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Posudbe</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Broj nevracenih knjiga</th>
                        <th>Detalji</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allUsers as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->books_unreturned }}</td>
                            <td class="button-table"> 
                                <a class="btn btn-primary btn-sm" href="{{ route('loan.show', ['id' => $user->id]) }}">Detalji o korisniku</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $allUsers->links() }}
        </div>
    </div>
@endsection
