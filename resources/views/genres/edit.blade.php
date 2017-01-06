@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Uređujete: <small>{{ $genre->display_name }}</small></h1>
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
            {{ Form::open(['method' => 'PUT', 'route' => ['genre.update', $genre->id]]) }}
                {{ Form::hidden('id', $genre->id) }}
                <div class="form-group">
                    {{ Form::label('name', 'Ime') }}
                    {{ Form::text('name', $genre->name, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('displayName', 'Ime za prikaz') }}
                    {{ Form::text('displayName', $genre->display_name, ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection