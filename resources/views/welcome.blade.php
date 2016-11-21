@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <h3>{{ $post->post_title }} <small class="pull-right">{{ $post->author()->first()->first_name }} {{ $post->author()->first()->last_name }}</small></h3>
                <p>{{ str_limit($post->post_body, 20) }}</p>
                <a href="#" class="btn btn-sm btn-info">Procitaj vise</a>
                <hr>
            </div>
        @endforeach
    </div>
    <div class="row">
        {{ $posts->links() }}
    </div>
@endsection
