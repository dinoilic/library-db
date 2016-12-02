@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Kreiranje nove clanarine</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['method' => 'POST', 'route' => 'membership.store']) }}
                <div class="form-group">
                    {{ Form::label('startDate', 'Datum pocetka clanarine') }}
                    {{ Form::text('startDate', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('endDate', 'Datum kraja clanarine') }}
                    {{ Form::text('endDate', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('books', 'Knjiga za posuditi') }}
                    {{ Form::text('books', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('name', 'Clan') }}
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
