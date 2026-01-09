<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - OLLO</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
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
            max-width: 500px;
        }
        .header {
            text-align: center;
            margin-bottom: 32px;
        }
        .logo {
            font-size: 36px;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: -1px;
            margin-bottom: 12px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .tagline {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }
        .card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            padding: 32px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        input[type="text"], 
        input[type="email"], 
        input[type="password"],
        select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d0d0d0;
            border-radius: 10px;
            font-size: 14px;
            font-family: 'Inter', sans-serif;
            transition: border-color 0.2s ease;
        }
        /* Ensure space for eye icon */
        input[type="password"] {
            padding-right: 44px;
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
        .toggle-password svg {
            width: 20px;
            height: 20px;
        }
        input[type="text"]::placeholder, 
        input[type="email"]::placeholder, 
        input[type="password"]::placeholder {
            color: #aaa;
        }
        input[type="text"]:focus, 
        input[type="email"]:focus, 
        input[type="password"]:focus,
        select:focus {
            outline: none;
            border-color: #7C4DFF;
            box-shadow: 0 0 0 3px rgba(124, 77, 255, 0.15);
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        .submit-btn {
            width: 100%;
            padding: 12px 16px;
            background: linear-gradient(90deg, #7C4DFF 0%, #6A3EE8 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.1s ease, box-shadow 0.2s ease;
            margin-top: 12px;
        }
        .submit-btn:hover {
            box-shadow: 0 10px 24px rgba(124, 77, 255, 0.35);
        }
        .submit-btn:active {
            transform: translateY(1px);
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #666;
        }
        .footer a {
            color: #7C4DFF;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .footer a:hover {
            color: #6A3EE8;
        }
        .form-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #1f1f1f;
        }
        .form-subtitle {
            color: #666;
            margin-bottom: 24px;
            font-size: 13px;
        }
        select {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 1.2em;
            padding-right: 2.5em;
        }
        @media (max-width: 520px) {
            .card {
                padding: 24px;
            }
            .header {
                margin-bottom: 24px;
            }
            .logo {
                font-size: 28px;
            }
            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="{{ url('/') }}" style="text-decoration: none; display: flex; align-items: center; justify-content: center;">
                <img src="{{ asset('images/logo ollo PNG 1.png') }}" alt="LYNK" style="height: 120px; width: auto; margin-bottom: 12px;">
            </a>
            <div class="tagline">Create your account</div>
        </div>

        <div class="card">
            <h2 class="form-title">Daftar Sekarang</h2>
            <p class="form-subtitle">Bergabunglah dengan ribuan kreator lainnya</p>

            <form method="POST" action="/register">
                @csrf
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input id="name" name="name" type="text" placeholder="Masukkan nama Anda" class="@error('name') 
                            is-invalid
                        @enderror" >
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror
                    </div>
                        
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="Username unik Anda" class="@error('username')
                            is-invalid
                        @enderror" >
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="your@email.com" required>
                </div>

                <div class="form-group">
                    <label for="profession">Profesi</label>
                    <select id="profession" name="profession" required>
                        <option value="">Pilih profesi Anda</option>
                        <option value="illustrator">Illustrator</option>
                        <option value="designer">Designer</option>
                        <option value="content_creator">Content Creator</option>
                        <option value="photographer">Photographer</option>
                        <option value="videographer">Videographer</option>
                        <option value="other">Lainnya</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="password-wrapper">
                            <input id="password" name="password" type="password" placeholder="••••••••" required>
                            <button type="button" class="toggle-password" id="toggleBtn1" aria-label="Tampilkan password">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Konfirmasi Password</label>
                        <div class="password-wrapper">
                            <input id="password_confirm" name="password_confirmation" type="password" placeholder="••••••••" required>
                            <button type="button" class="toggle-password" id="toggleBtn2" aria-label="Tampilkan password">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Daftar</button>
            </form>

            <p class="footer">
                Sudah punya akun? <a href="{{ url('/login') }}">Login di sini</a>
            </p>
        </div>
    </div>
    <script>
        const toggleBtn1 = document.getElementById('toggleBtn1');
        const toggleBtn2 = document.getElementById('toggleBtn2');
        const passwordInput = document.getElementById('password');
        const passwordConfirmInput = document.getElementById('password_confirm');
        const eyeOpen = '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg>';
        const eyeClosed = '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" stroke="currentColor" stroke-width="2"/><path d="M3 3l18 18" stroke="currentColor" stroke-width="2"/></svg>';
        toggleBtn1.innerHTML = eyeOpen;
        toggleBtn2.innerHTML = eyeOpen;
        
        toggleBtn1.addEventListener('click', function(e) {
            e.preventDefault();
            const isHidden = passwordInput.type === 'password';
            passwordInput.type = isHidden ? 'text' : 'password';
            toggleBtn1.innerHTML = isHidden ? eyeClosed : eyeOpen;
            toggleBtn1.setAttribute('aria-label', isHidden ? 'Sembunyikan password' : 'Tampilkan password');
        });
        
        toggleBtn2.addEventListener('click', function(e) {
            e.preventDefault();
            const isHidden = passwordConfirmInput.type === 'password';
            passwordConfirmInput.type = isHidden ? 'text' : 'password';
            toggleBtn2.innerHTML = isHidden ? eyeClosed : eyeOpen;
            toggleBtn2.setAttribute('aria-label', isHidden ? 'Sembunyikan password' : 'Tampilkan password');
        });
    </script>
</body>
</html>
