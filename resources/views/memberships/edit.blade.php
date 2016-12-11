@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Uredujete clanarinu za: <small>{{ $user->first_name }} {{ $user->last_name }}</small></h1>
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
            {{ Form::open(['method' => 'PUT', 'route' => ['membership.update', $membership->id]]) }}
                {{ Form::hidden('id', $membership->id) }}
                <div class="form-group">
                    {{ Form::label('startDate', 'Datum pocetka clanarine') }}
                    {{ Form::text('startDate', $membership->start_date, ['class' => 'form-control datepicker']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('endDate', 'Datum kraja clanarine') }}
                    {{ Form::text('endDate', $membership->end_date, ['class' => 'form-control datepicker']) }}
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