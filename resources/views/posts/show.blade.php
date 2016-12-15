@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Informacije o clancima</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $post->post_title }}</h2>
            <p>{{ $post->post_body }}</p>
        </div>
    </div>
@endsection
