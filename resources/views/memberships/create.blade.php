@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Kreiranje nove članarine</h1>
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
            {{ Form::open(['method' => 'POST', 'route' => 'membership.store']) }}
                <div class="form-group">
                    {{ Form::label('startDate', 'Datum početka članarine') }}
                    {{ Form::text('startDate', null, ['class' => 'form-control datepicker']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('endDate', 'Datum kraja članarine') }}
                    {{ Form::text('endDate', null, ['class' => 'form-control datepicker']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('books', 'Knjiga za posuditi') }}
                    {{ Form::text('books', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('name', 'Član') }}
                    <select class="form-control" name="userId">
                        @foreach($allUsers as $user)
                            @if($user->hasRole('member'))
                                <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
                            @endif
                        @endforeach
                    </select>
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