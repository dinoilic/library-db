@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Kreiranje novog clanka</h1>
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
            {{ Form::open(['method' => 'POST', 'route' => 'post.store']) }}
                <div class="form-group">
                    {{ Form::label('postTitle', 'Naziv clanka') }}
                    {{ Form::text('postTitle', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('postBody', 'Tekst clanka') }}
                    {{ Form::textarea('postBody', null, ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection
