<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            padding: 30px;
        }
        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
        }
        button {
            background: #dc2626;
            color: white;
            border: 0;
            border-radius: 6px;
            padding: 10px 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Dashboard</h1>

        <p>Selamat datang, {{ Auth::user()->username }}!</p>
        <p>Anda berhasil login ke aplikasi Laravel.</p>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>