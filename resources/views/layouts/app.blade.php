<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OLLO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 50vh;
        }

        footer {
            background-color: #1a3a5f;
            color: white;
            padding: 40px 0 20px 0;
            /* Atur padding */
            margin-top: 50px;
            /* Beri jarak dari konten utama */
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            /* Grid responsif */
            gap: 40px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #ffffff;
            padding-bottom: 10px;
            border-bottom: 1px solid #4a9678;
            /* Garis bawah judul footer */
            display: inline-block;
        }

        .footer-section p,
        .footer-section a {
            color: #ddd;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #4a9678;
            /* Warna hover link footer */
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-icons a {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            /* Warna ikon */
            width: 36px;
            /* Sedikit lebih besar */
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .social-icons a span {
            /* Sembunyikan teks jika hanya ikon */
            /* font-size: 0; */
            /* Atau gunakan ikon FontAwesome */
            font-weight: bold;
        }

        .social-icons a:hover {
            background-color: #4a9678;
            /* Warna hover ikon sosial media */
            transform: scale(1.1);
            /* Efek zoom kecil */
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            /* Jarak dari grid footer */
            border-top: 1px solid #444;
            /* Garis pemisah */
            font-size: 14px;
            color: #aaa;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .contact-icon {
            margin-right: 10px;
            color: #4a9678;
            /* Warna ikon kontak */
            width: 20px;
            /* Lebar tetap untuk ikon */
            text-align: center;
        }
    </style>

    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    
</body>

</html>
