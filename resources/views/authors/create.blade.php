@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Kreiranje novog autora</h1>
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
            {{ Form::open(['method' => 'POST', 'route' => 'author.store']) }}
                <div class="form-group">
                    {{ Form::label('firstName', 'Ime') }}
                    {{ Form::text('firstName', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('lastName', 'Prezime') }}
                    {{ Form::text('lastName', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('dob', 'Datum rodenja') }}
                    {{ Form::text('dob', null, ['class' => 'form-control datepicker']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('dod', 'Datum smrti') }}
                    {{ Form::text('dod', null, ['class' => 'form-control datepicker']) }}
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
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
