@extends('layout')

@section('title', 'Articles List')

@section('content')
    <h1 class="mb-4">Articles List</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Topic</th>
                <th scope="col">Title</th>
                <th scope="col">Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->name }}</td>
                    <td>{{ $article->topic }}</td>
                    <td><a class="nav-link" href="/articles/{{ $article->id }}">{{ $article->title }}</a></td>
                    <td>{{ $article->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="/authors/">Go to Authors List</a>
@endsection
