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
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $post->post_title }} <small class="pull-right">{{ $post->author()->first()->first_name }} {{ $post->author()->first()->last_name }}</small></h3>
                <p>{{ str_limit($post->post_body, 20) }}</p>
                <a class="btn btn-primary" href="{{ url('details', ['id' => $post->id]) }}">Procitaj vise</a>
                <hr>
            </div>
        </div>
    @endforeach
    <div class="row">
        {{ $posts->links() }}
    </div>
@endsection
