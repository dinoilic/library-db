@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Kreiranje novog žanra</h1>
    </div>

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @endforeach
    @endif

    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'POST', 'route' => 'genre.store']) }}
                <div class="form-group">
                    {{ Form::label('name', 'Ime') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('displayName', 'Ime za prikaz') }}
                    {{ Form::text('displayName', null, ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection
