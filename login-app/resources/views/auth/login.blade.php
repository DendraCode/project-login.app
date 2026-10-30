<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0 4px 18px #0001;
        }
        input, button {
            box-sizing: border-box;
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 14px;
            border-radius: 6px;
        }
        input { border: 1px solid #cbd5e1; }
        button {
            border: 0;
            background: #dc2626;
            color: white;
            cursor: pointer;
        }
        .error { color: #dc2626; font-size: 14px; }
        .success { color: #15803d; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Login</h2>
        <p>Silakan masuk menggunakan akun Anda.</p>

        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

       <form method="POST" action="{{ url('/login') }}">
    @csrf

    <label>Username</label>
    <input
        type="text"
        name="username"
        value="{{ old('username') }}"
        placeholder="Masukkan username"
        autocomplete="username"
        required
        autofocus
    >

    <label>Password</label>
    <input
        type="password"
        name="password"
        placeholder="Masukkan password"
        autocomplete="current-password"
        required
    >

    <button type="submit">Login</button>
</form>
    </div>
</body>
</html>