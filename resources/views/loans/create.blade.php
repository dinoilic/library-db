@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Kreiranje nove posudbe za knjigu <small>{{ $book->name }}</small></h1>
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
            {{ Form::open(['method' => 'POST', 'route' => 'loan.store']) }}
                {{ Form::hidden('bookId', $book->id) }}
                <div class="form-group">
                    {{ Form::label('loanLength', 'Datum trajanja posudbe u danima') }}
                    {{ Form::text('loanLength', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('name', 'Clan') }}
                    <select class="form-control" name="userId">
                        @foreach($validUsers as $user)
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