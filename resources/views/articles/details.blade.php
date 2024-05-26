@extends('layout')

@section('title', 'Article Details')

@section('content')
    <h1 class="mb-4">Article Details</h1>

    <dl class="row">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9">{{ $article->id }}</dd>

        <dt class="col-sm-3">Author</dt>
        <dd class="col-sm-9">{{ $article->name }}</dd>

        <dt class="col-sm-3">Topic</dt>
        <dd class="col-sm-9">{{ $article->topic }}</dd>

        <dt class="col-sm-3">Title</dt>
        <dd class="col-sm-9">{{ $article->title }}</dd>

        <dt class="col-sm-3">Created at</dt>
        <dd class="col-sm-9">{{ $article->created_at }}</dd>

        <dt class="col-sm-3">Content</dt>
        <dd class="col-sm-9">{{ $article->content }}</dd>
    </dl>
@endsection
