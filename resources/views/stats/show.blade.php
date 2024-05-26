@extends('layout')

@section('title', 'Stats')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Total Authors</h5>
                        <p class="card-text">{{ $stats['authors_count'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Total Articles</h5>
                        <p class="card-text">{{ $stats['articles_count'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Authors Registered Last Month</h5>
                        <p class="card-text">{{ $stats['authors_count_last_month'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Last Registered Author</h5>
                        <p class="card-text">{{ $stats['authors_last_registered'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Most Related Author</h5>
                        <p class="card-text">{{ $stats['authors_most_related']->name }} with {{ $stats['authors_most_related']->count }} articles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
