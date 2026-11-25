@extends('layout.app')

@section('pagetitle','Edit book')


@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Edit Book</h1>
            <a class="nav-link" href="/books">All Books</a>
        </div>

        <form method="POST" action="/books/{{$book->id}}/edit">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Book title</label>
                <input type="text" id="title" name="title" value="{{$book->title}}" />
            </div>
            <div class="form-group">
                <label for="pages">Book pages</label>
                <input type="number" id="pages" name="pages" value="{{$book->pages}}" />
            </div>
            <div class="form-group">
                <label for="price">Book price</label>
                <input type="number" id="price" name="price" value="{{$book->price}}" />
            </div>
            <div class="form-group">
                <label for="author">Book author</label>
                <input type="text" id="author" name="author" value="{{$book->author}}" />
            </div>
            <button class="btn-primary" type="submit" name="save" value="Edit">Edit</button>
        </form>
    </div>
@endsection
