<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLLO - Log In</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
            background: linear-gradient(135deg, #F8F5FF 0%, #cdb9fcff 50%, #F8F5FF 100%);
            color: #1f1f1f;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 420px;
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .header img {
            height: 160px;
            width: auto;
            margin-bottom: 12px;
            display: block;
        }

        .header-link {
            text-decoration: none;
            display: inline-block;
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
            margin-bottom: 24px;
        }

        .brand img {
            width: 160px;
            height: 160px;
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

        .password-wrapper {
            position: relative;
            width: 100%;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #7C4DFF;
            font-size: 18px;
            padding: 4px 8px;
            transition: opacity 0.2s ease;
        }

        .toggle-password:hover {
            opacity: 0.8;
        }

        /* Ensure space for eye icon */
        input[type="password"] {
            padding-right: 44px;
        }

        .toggle-password svg {
            width: 20px;
            height: 20px;
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
            padding: 12px 16px;
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

            .header img {
                height: 120px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="{{ url('/') }}" class="header-link">
                <img src="{{ asset('images/logo ollo PNG 1.png') }}" alt="OLLO Logo">
            </a>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show p-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show p-3" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="card">
            <h2 class="title">Masuk ke akun</h2>
            <p class="subtitle">Akses dashboard dan mulai kelola portofolio Anda.</p>

            <form method="POST" action="{{ route('loginPost') }}">
                @csrf
                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="you@example.com" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input id="password" name="password" type="password" placeholder="••••••••" required>
                        <button type="button" class="toggle-password" id="toggleBtn" aria-label="Tampilkan password">`
                        </button>
                    </div>
                </div>
                <div class="actions">
                    <label class="remember">
                        <input type="checkbox" name="remember"> Ingat saya
                    </label>
                    <a href="#forgot">Lupa password?</a>
                </div>
                <button type="submit">Login</button>
            </form>

            <p class="footer">Belum punya akun? <a href="{{ route('register.create') }}">Daftar sekarang</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        const toggleBtn = document.getElementById('toggleBtn');
        const passwordInput = document.getElementById('password');
        const eyeOpen =
            '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg>';
        const eyeClosed =
            '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" stroke="currentColor" stroke-width="2"/><path d="M3 3l18 18" stroke="currentColor" stroke-width="2"/></svg>';
        toggleBtn.innerHTML = eyeOpen;
        toggleBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const isHidden = passwordInput.type === 'password';
            passwordInput.type = isHidden ? 'text' : 'password';
            toggleBtn.innerHTML = isHidden ? eyeClosed : eyeOpen;
            toggleBtn.setAttribute('aria-label', isHidden ? 'Sembunyikan password' : 'Tampilkan password');
        });
    </script>
</body>

</html>
