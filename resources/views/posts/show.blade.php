@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $post->post_title }}</h3>
            <p>{{ $post->post_body }}</p>
        </div>
    </div>
@endsection
