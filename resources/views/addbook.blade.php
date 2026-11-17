<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Book</h1>
    <p><a href="/books">All Books</a></p>

    <form method="POST" action="/addbook">
        <label>Book title: </label>
        <input type="text" name="title" /> <br><br>
        <label>Book pages: </label>
        <input type="number" name="pages" /> <br><br>
        <label>Book price: </label>
        <input type="number" name="price" /> <br><br>
        <label>Book author: </label>
        <input type="text" name="author" /> <br><br>
        <input type="submit" name="save" value="SAVE BOOK" />
    </form>
</body>
</html>