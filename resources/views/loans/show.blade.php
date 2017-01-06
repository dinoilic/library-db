@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Korisnik: <small>{{ $user->first_name }} {{ $user->last_name }}</small></h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Posuđene knjige</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Naziv knjige</th>
                        <th>Datum posudbe</th>
                        <th>Rok za vraćanje</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unreturned_books as $ubook)
                        <tr>
                            <td>{{ $ubook->name }}</td>
                            <td>{{ $ubook->pivot->date_loaned }}</td>
                            <td class="{{ $ubook->pivot->date_return < Carbon\Carbon::now() ? 'red' : '' }}">
                                {{ $ubook->pivot->date_return }}
                            </td>
                            <td class="button-table">
                                <a class="btn btn-sm btn-success" href="{{ route('loan.return', ['id' => $ubook->pivot->id, 'userId' => $user->id]) }}">
                                    Vrati knjigu
                                </a>
                            </td>
                            <td class="button-table">
                                <a class="btn btn-sm btn-warning" href="{{ route('loan.extend', ['id' => $ubook->pivot->id, 'userId' => $user->id]) }}">
                                    Produži knjigu
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h3>Vraćene knjige</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Naziv knjige</th>
                        <th>Datum posudbe</th>
                        <th>Rok za vraćanje</th>
                        <th>Datum vraćanja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($returned_books as $rbook)
                        <tr>
                            <td>{{ $rbook->name }}</td>
                            <td>{{ $rbook->pivot->date_loaned }}</td>
                            <td>{{ $rbook->pivot->date_return }}</td>
                            <td>{{ $rbook->pivot->date_returned }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
