@extends('layout')

@section('title', 'Authors List')

@section('content')
    <h1 class="mb-4">Authors List</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->username }}</td>
                    <td><a class="nav-link" href="/authors/{{ $author->id }}">{{ $author->name }}</a></td>
                    <td>{{ $author->email }}</td>
                    <td>{{ $author->address }}</td>
                    <td>{{ $author->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary" href="/articles/">Go to Articles List</a>
    <a class="btn btn-success" href="/authors/create/">Create Author</a>
@endsection
