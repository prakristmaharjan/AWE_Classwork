<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 40px 20px;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: #1f2937;
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 32px 36px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 12px 32px rgba(15, 23, 42, 0.08);
        }

        .page-header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        h1 {
            margin: 0;
            font-size: 1.75rem;
            color: #111827;
        }

        .nav-link {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 8px;
            background: #4f46e5;
            color: #ffffff;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s ease;
        }

        .nav-link:hover {
            background: #4338ca;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
        }

        th,
        td {
            padding: 12px 14px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        th {
            background: #f8fafc;
            color: #475569;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .title-link {
            color: #4f46e5;
            font-weight: 600;
            text-decoration: none;
        }

        .title-link:hover {
            text-decoration: underline;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .inline-form {
            display: inline;
            margin: 0;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            font-family: inherit;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-edit {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .btn-edit:hover {
            background: #bfdbfe;
        }

        .btn-delete {
            background: #fee2e2;
            color: #b91c1c;
        }

        .btn-delete:hover {
            background: #fecaca;
        }
    </style>
</head>
<body>
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
</body>
</html>
