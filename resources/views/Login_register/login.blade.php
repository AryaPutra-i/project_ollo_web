<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLLO - Login</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #9575FF 0%, #7C4DFF 50%, #6A3EE8 100%);
            color: #1f1f1f;
        }

        .card {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            padding: 32px;
        }

        .brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .brand img {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }

        .brand h1 {
            font-size: 22px;
            font-weight: 700;
            color: #4b2bb2;
        }

        .title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #5b5b5b;
            margin-bottom: 24px;
            font-size: 14px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        label {
            font-weight: 600;
            font-size: 14px;
            color: #333;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #e2e2e2;
            font-size: 14px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #7C4DFF;
            outline: none;
            box-shadow: 0 0 0 3px rgba(124, 77, 255, 0.15);
        }

        .actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            font-size: 14px;
        }

        .actions a {
            color: #7C4DFF;
            text-decoration: none;
            font-weight: 600;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        button[type="submit"] {
            margin-top: 4px;
            width: 100%;
            padding: 12px 12px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(90deg, #7C4DFF 0%, #6A3EE8 100%);
            color: #ffffff;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: transform 0.1s ease, box-shadow 0.2s ease;
        }

        button[type="submit"]:hover {
            box-shadow: 0 10px 24px rgba(124, 77, 255, 0.35);
        }

        button[type="submit"]:active {
            transform: translateY(1px);
        }

        .footer {
            text-align: center;
            margin-top: 16px;
            font-size: 14px;
            color: #555;
        }

        .footer a {
            color: #7C4DFF;
            font-weight: 600;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 520px) {
            body {
                padding: 24px;
            }

            .card {
                padding: 24px;
            }
        }
    </style>
</head>

<body>
    <main class="card">

        <div class="brand">
            <img src="{{ asset('images/logo ollo PNG 1.png') }}" alt="Ollo">
        </div>

        <h2 class="title">Masuk ke akun</h2>
        <p class="subtitle">Akses dashboard dan mulai kelola portofolio Anda.</p>

        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="you@example.com" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="••••••••" required>
            </div>
            <div class="actions">
                <label class="remember">
                    <input type="checkbox" name="remember"> Ingat saya
                </label>
                <a href="#forgot">Lupa password?</a>
            </div>
            <button type="submit">Login</button>

            <a href="{{ route('welcome') }}" type="button" class="btn btn-outline-danger"
                style="padding: 8px; border-radius: 10px;">
                <span data-feather="skip-back"></span> Kembali
            </a>
        </form>

        <p class="footer">Belum punya akun? <a href="#register">Daftar sekarang</a></p>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>
