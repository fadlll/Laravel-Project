<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 NOT FOUND</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #111827; /* Warna gelap ala default Laravel */
            color: #f3f4f6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        .error-code {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 25px;
        }

        .error-code span {
            border-right: 2px solid #4b5563;
            padding-right: 15px;
        }

        .button-group {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: 500;
            color: #e5e7eb;
            background-color: #1f2937;
            border: 1px solid #374151;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn:hover {
            background-color: #b42e2e;
            color: #ffffff;
            border-color: #4b5563;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Teks Bawaan 404 NOT FOUND -->
        <div class="error-code">
            <span>404</span> NOT FOUND
        </div>

        <!-- Tombol Pindah ke Bawah Teks -->
        <div class="button-group">
            <button onclick="history.back()" class="btn">Kembali</button>
            <a href="{{ url('/') }}" class="btn">Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>