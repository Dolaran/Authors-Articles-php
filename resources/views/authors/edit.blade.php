@extends('layout')

@section('title', 'Edit author')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Edit Author</div>
                <div class="card-body">
                    <form method="post" action="/authors/{{ $author->id }}/edit/">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Enter the name of the author" value="{{ $author->name }}" />
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="Enter the email of the author" value="{{ $author->email }}" />
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" class="form-control" placeholder="Enter the username of the author" value="{{ $author->username }}" />
                            @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" name="address" type="text" class="form-control" placeholder="Enter the address of the author" value="{{ $author->address }}" />
                            @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
