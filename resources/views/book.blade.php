@extends('layout.app')

@section('pagetitle','book detail')


@section('content')
    <div class="container">
        <div class="page-header">
            <h1>{{ $book->title }}</h1>
            <a class="nav-link" href="/books">All Books</a>
        </div>

        <div class="detail-list">
            <div class="detail-row">
                <span class="detail-label">Author</span>
                <span class="detail-value">{{ $book->author }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Price</span>
                <span class="detail-value">Rs. {{ $book->price }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Pages</span>
                <span class="detail-value">{{ $book->pages }}</span>
            </div>
        </div>
    </div>
@endsection
