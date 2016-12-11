@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Uredujete: <small>{{ $author->first_name }} {{ $author->last_name }}</small></h1>
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
            {{ Form::open(['method' => 'PUT', 'route' => ['author.update', $author->id]]) }}
                {{ Form::hidden('id', $author->id) }}
                <div class="form-group">
                    {{ Form::label('firstName', 'Ime') }}
                    {{ Form::text('firstName', $author->first_name, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lastName', 'Prezime') }}
                    {{ Form::text('lastName', $author->last_name, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('dob', 'Datum rodenja') }}
                    {{ Form::text('dob', $author->dob, ['class' => 'form-control datepicker']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('dod', 'Datum smrti') }}
                    {{ Form::text('dod', $author->dod, ['class' => 'form-control datepicker']) }}
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
            {{ Form::open(['method' => 'DELETE', 'route' => ['author.destroy', $author->id]]) }}
                {{ Form::hidden('id', $author->id) }}
                {{ Form::submit('Obrisi autora', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/classic.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/classic.date.css') }}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/picker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/picker.date.js') }}"></script>
    <script>
        $('.datepicker').pickadate({
            formatSubmit: 'yyyy-mm-dd',
            hiddenName: true
        })
    </script>
@endsection