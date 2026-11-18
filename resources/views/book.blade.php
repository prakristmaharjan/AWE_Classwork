<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="/books">All Books</a></p>
    <h1>{{$book->title}}</h1>
    <h3>Author: {{$book->author}}</h3>
    <h3>Price: Rs. {{$book->price}}</h3>
    <h3>Pages: {{$book->pages}}</h3>
</body>
</html>