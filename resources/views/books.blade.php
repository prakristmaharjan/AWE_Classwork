<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All books from database: </h1>
    <p><a href="/addbook">Add Books</a></p>
    <table border="1" style="border: collapse: collapse;">
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
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <form action="/deletebook/{{$book->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>