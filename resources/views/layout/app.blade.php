<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page: @yield('pagetitle')</title>
</head>
<body>
    <div>
        <ul id="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/books">All Books</a></li>
            <li><a href="/addbook">Add Book</a></li>
        <ul>
    </div>
    <div>
        @section('content')
        @show
    </div>
    <div id="footer">
        <p>&copy; 2026 | Test Project</p>
    </div>
</body>
</html>