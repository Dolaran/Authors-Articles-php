@extends('layout')

@section('title', 'Delete author')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-danger text-white">Delete Author</div>
            <div class="card-body">
                <h5 class="card-title">Are you shure you want to delete {{ $author->name }} ({{ $author->username }})?</h5>

                <div class="d-flex justify-content-center">
                    <button type="button" class="mt-3 btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Delete
                    </button>
                </div>
                
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this author?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form method="POST" action="/authors/{{ $author->id }}/delete">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection