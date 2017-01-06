@extends('layouts.app')

@section('content')
    <div class="row">
        <h2>Najpopularnije knjige mjeseca</h2>
        <hr>
        @for($i = 0; $i < (count($books) > 3 ? 3 : count($books)); $i++)
            <div class="col-md-4 text-center">
                <img src="http://covers.openlibrary.org/b/isbn/{{ $books[$i]->isbn }}-M.jpg">
                <h4>{{ $books[$i]->name }}</h4>
            </div>
        @endfor
    </div>
    <hr>
    <div class="row">
        {{ $posts->links() }}
    </div>
        <div class="row">
    @foreach($posts as $post)
            <div class="col-md-4">
                <h5>{{ $post->post_title }}</h5>
                <h6>Autor: <small>{{ $post->author()->first()->first_name }} {{ $post->author()->first()->last_name }}</small></h6>
                <h6>Datum: <small>{{ $post->created_at }}</small></h6>
                <p class="text-justify">{{ str_limit($post->post_body, 200) }}</p>
                <a class="btn btn-primary btn-sm" href="{{ url('details', ['id' => $post->id]) }}">Pročitaj vise</a>
                <hr>
            </div>
    @endforeach
        </div>
    <div class="row">
        {{ $posts->links() }}
    </div>
@endsection
