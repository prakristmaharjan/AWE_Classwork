<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }}</title>
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

        .detail-list {
            margin: 0;
        }

        .detail-row {
            display: flex;
            gap: 16px;
            padding: 14px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            width: 90px;
            flex-shrink: 0;
            color: #6b7280;
            font-weight: 600;
        }

        .detail-value {
            color: #111827;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>{{ $book->title }}</h1>
            <a class="nav-link" href="/books">All Books</a>
        </div>

        <div class="detail-list">
            <div class="detail-row">
                <span class="detail-label">Author</span>
                <span class="detail-value">{{ $book->author }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Price</span>
                <span class="detail-value">Rs. {{ $book->price }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Pages</span>
                <span class="detail-value">{{ $book->pages }}</span>
            </div>
        </div>
    </div>
</body>
</html>
