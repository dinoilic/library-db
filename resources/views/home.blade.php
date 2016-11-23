@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Pozdrav <span class="user-name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            @if(Auth::user()->hasRole('member'))
                <h3>Vaše članarine: {{ $memberships->count() }}</h3>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Pocetni datum</th>
                        <th>Krajnji datum</th>
                        <th>Stanje</th>
                    </tr>
                    @foreach($memberships as $membership)
                    <tr>
                        <td>{{ $membership->start_date }}</td>
                        <td>{{ $membership->end_date }}</td>
                        <td>
                        @if(Carbon\Carbon::now()->between(Carbon\Carbon::createFromFormat('Y-m-d', $membership->start_date)->startOfDay(), Carbon\Carbon::createFromFormat('Y-m-d', $membership->end_date)->startOfDay()))
                            <span class="fa fa-check green"></span> Članstvo vrijedi
                        @else
                            <span class="fa fa-times red"></span> Članstvo je isteklo
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            @endif
        </div>
        <div class="col-md-6">
            Test
        </div>
    </div>
@endsection
