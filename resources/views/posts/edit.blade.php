@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Uredujete: <small>{{ $post->post_title }}</small></h1>
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
            {{ Form::open(['method' => 'PUT', 'route' => ['post.update', $post->id]]) }}
                {{ Form::hidden('id', $post->id) }}
                <div class="form-group">
                    {{ Form::label('postTitle', 'Ime clanka') }}
                    {{ Form::text('postTitle', $post->post_title, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('postBody', 'Tekst clanka') }}
                    {{ Form::textarea('postBody', $post->post_body, ['class' => 'form-control']) }}
                </div>
                {{ Form::submit('Spremi', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection
