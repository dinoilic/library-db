@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Uredujete: <small>{{ $user->first_name }} {{ $user->last_name }}</small></h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'PUT', 'route' => ['user.update', $user->id]]) }}
                {{ Form::hidden('id', $user->id) }}
                <div class="form-group">
                    {{ Form::label('firstName', 'Ime') }}
                    {{ Form::text('firstName', $user->first_name, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lastName', 'Prezime') }}
                    {{ Form::text('lastName', $user->last_name, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('email', 'E-mail') }}
                    {{ Form::text('email', $user->email, ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection
