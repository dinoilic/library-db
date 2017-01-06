@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Informacije o člancima</h1>
    </div>
    <div class="list-group">
        <a href="{{ route('post.create') }}" class="btn btn-primary btn-block"><span class="fa fa-plus"></span> Dodaj novi članak</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naslov</th>
                        <th>Kratki opis</th>
                        <th>Detalji</th>
                        <th>Uredi</th>
                        <th>Obriši</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->post_title }}</td>
                            <td>{{ str_limit($post->post_body, 20) }}</td>
                            <td class="button-table">
                                <a class="btn btn-primary btn-sm" href="{{ url('details', ['id' => $post->id]) }}">Pregledaj članak</a>
                            </td>
                            <td class="button-table">
                                <a class="btn btn-primary btn-sm" href="{{ route('post.edit', ['id' => $post->id]) }}">Uredi članak</a>
                            </td>
                            <td class="button-table">
                                {{ Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) }}
                                    {{ Form::hidden('id', $post->id) }}
                                    {{ Form::submit('Obriši članak', ['class' => 'btn btn-sm btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
@endsection
