@extends('layouts.admin')

@section('content')
    <h1>Elenco post</h1>
    <a href="#" class="btn btn-primary">Crea un nuovo post</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">Visualizza</a>
                        <a href="#" class="btn btn-warning">Modifica</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}

@endsection
