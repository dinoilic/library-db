@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Informacije o članarinama</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('membership.create') }}" class="btn btn-block btn-primary"><span class="fa fa-plus"></span> Dodaj novu članarinu</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Datum početka</th>
                        <th>Datum kraja</th>
                        <th>Broj knjiga</th>
                        <th>Broj preostalih knjiga</th>
                        <th>Status članstva</th>
                        <th>Detalji</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($memberships as $membership)
                        <tr>
                            <td>{{ $membership->user()->first()->first_name }}</td>
                            <td>{{ $membership->user()->first()->last_name }}</td>
                            <td>{{ $membership->start_date }}</td>
                            <td>{{ $membership->end_date }}</td>
                            <td>{{ $membership->books }}</td>
                            <td>{{ $membership->books_left }}</td>
                            <td>
                            @if($membership->is_valid)
                                <span class="fa fa-check green"></span> Članstvo vrijedi
                            @else
                                <span class="fa fa-times red"></span> Članstvo je isteklo
                            @endif
                            </td>
                            <td class="button-table"><a class="btn btn-primary btn-sm" href="{{ route('membership.show', ['id' => $membership->id]) }}">Detalji o članarini</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $memberships->links() }}
        </div>
    </div>
@endsection
