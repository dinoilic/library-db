@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Najpopularnija knjiga</h2>
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="http://covers.openlibrary.org/b/isbn/{{ $bestBook->isbn }}-M.jpg">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{ $bestBook->name }}</h4>
                    <hr>
                    <h4>Opis knjige</h4>
                    <p class="text-justify">{{ str_limit($bestBook->description, 500) }}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
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
