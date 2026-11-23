<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
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
            max-width: 620px;
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

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #374151;
            font-size: 0.9rem;
            font-weight: 600;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
        }

        .btn-primary {
            display: inline-block;
            padding: 11px 20px;
            border: none;
            border-radius: 8px;
            background: #4f46e5;
            color: #ffffff;
            font-family: inherit;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn-primary:hover {
            background: #4338ca;
        }
    </style>
</head>
<body>
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
</body>
</html>
