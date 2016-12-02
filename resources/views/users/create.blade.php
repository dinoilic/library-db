@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Kreiranje novog korisnika</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'POST', 'route' => 'user.store']) }}
                <div class="form-group">
                    {{ Form::label('firstName', 'Ime') }}
                    {{ Form::text('firstName', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lastName', 'Prezime') }}
                    {{ Form::text('lastName', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('email', 'E-mail') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('password', 'Lozinka') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection
