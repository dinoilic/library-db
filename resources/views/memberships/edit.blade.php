@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Uredujete clanarinu za: <small>{{ $user->first_name }} {{ $user->last_name }}</small></h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'PUT', 'route' => ['membership.update', $membership->id]]) }}
                {{ Form::hidden('id', $membership->id) }}
                <div class="form-group">
                    {{ Form::label('startDate', 'Datum pocetka clanarine') }}
                    {{ Form::text('startDate', $membership->start_date, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('endDate', 'Datum kraja clanarine') }}
                    {{ Form::text('endDate', $membership->end_date, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('books', 'Knjiga za posuditi') }}
                    {{ Form::text('books', $membership->books, ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection
