<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Books</h1>
    <p><a href="/books">All Books</a></p>

    <form method="POST" action="/addbook">
        <label>Book title: </label>
        <input type="text" name="title" value="{{$book->title}}"/> <br><br>
        <label>Book pages: </label>
        <input type="number" name="pages" value="{{$book->pages}}"/> <br><br>
        <label>Book price: </label>
        <input type="number" name="price" value="{{$book->price}}"/> <br><br>
        <label>Book author: </label>
        <input type="text" name="author" value="{{$book->author}}"/> <br><br>
        <input type="submit" name="save" value="Edit" />
    </form>
</body>
</html>