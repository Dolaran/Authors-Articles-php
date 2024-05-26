@extends('layout')

@section('title', 'Authors Details')

@section('content')
    <h1 class="mb-4">Authors Details</h1>

    <dl class="row">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9">{{ $author->id }}</dd>

        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9">{{ $author->email }}</dd>

        <dt class="col-sm-3">Username</dt>
        <dd class="col-sm-9">{{ $author->username }}</dd>

        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9">{{ $author->name }}</dd>

        <dt class="col-sm-3">Address</dt>
        <dd class="col-sm-9">{{ $author->address }}</dd>

        <dt class="col-sm-3">Created at</dt>
        <dd class="col-sm-9">{{ $author->created_at }}</dd>
    </dl>

    <a href="/authors/" class="btn btn-secondary">Back to Authors List</a>
    <a href="/authors/{{ $author->id }}/edit" class="btn btn-primary">Edit Author</a>
    <a href="/authors/{{ $author->id }}/delete" class="btn btn-danger">Delete Author</a>
@endsection
