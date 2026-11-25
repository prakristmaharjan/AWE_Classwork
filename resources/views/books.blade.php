@extends('layout.app')

@section('pagetitle','MY Books')


@section('content')
    <div class="container">
        <div class="page-header">
            <h1>All books from database</h1>
            <a class="nav-link" href="/addbook">Add Books</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Pages</th>
                    <th>Price</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                 @foreach($books as $book)
                    <tr>
                        <td><a class="title-link" href="/books/{{$book->id}}">{{ $book->title }}</a></td>
                        <td>{{ $book->pages }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->author }}</td>
                        <td>
                            <div class="actions">
                                <form class="inline-form" action="/books/{{$book->id}}/delete" method="POST"
                                    onclick="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-delete" type="submit">Delete</button>
                                </form>
                                <a class="btn btn-edit" href="/books/{{$book->id}}/edit">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
