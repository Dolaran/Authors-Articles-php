@extends('layout')

@section('title', 'Create new author')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-success text-white">Create Author</div>
                <div class="card-body">
                    <form method="post" action="/authors/create/">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Enter the name of the author" value="{{ old('name') }}" />
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="Enter the email of the author" value="{{ old('email') }}" />
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" class="form-control" placeholder="Enter the username of the author" value="{{ old('username') }}" />
                            @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" name="address" type="text" class="form-control" placeholder="Enter the address of the author" value="{{ old('address') }}" />
                            @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Enter the password of the author" />
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
