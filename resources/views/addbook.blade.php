@extends('layout.app')

@section('pagetitle','Add book')


@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Add Book</h1>
            <a class="nav-link" href="/books">All Books</a>
        </div>

        <form method="POST" action="/addbook">
            @csrf
            <div class="form-group">
                <label for="title">Book title</label>
                <input type="text" id="title" name="title" />
            </div>
            <div class="form-group">
                <label for="pages">Book pages</label>
                <input type="number" id="pages" name="pages" />
            </div>
            <div class="form-group">
                <label for="price">Book price</label>
                <input type="number" id="price" name="price" />
            </div>
            <div class="form-group">
                <label for="author">Book author</label>
                <input type="text" id="author" name="author" />
            </div>
            <button class="btn-primary" type="submit" name="save" value="SAVE BOOK">SAVE BOOK</button>
        </form>
    </div>
@endsection
