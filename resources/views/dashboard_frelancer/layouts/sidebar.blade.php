<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollo</title>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <style>
        * {
            font-family: 'poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 220px;
            padding-top: 25px;
            background-color: #2C2C2C;
            transition: width 0, 3ss;
        }

        .sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 20px;
            color: white;
        }

        .sidebar .deskripsi {
            font-size: 16px;
            font-family: 'poppins', sans-serif;
        }

        .sidebar .logo-img {
            display: flex;
            justify-content: center;
        }

        .sidebar .logo {
            width: 180px;
            margin-bottom: 25px;
            margin-top: 15px;

        }

        .sidebar .nav-link:hover {
            background-color: #7C4DFF;
        }

        .sidebar .nav-link.active {
            background-color: #7C4DFF;
            /* border-left: 4px solid #FFD700; */
        }

        .main-content {
            height: 100vh;
            margin-left: 220px;
            padding: 20px;
            /* background-size: cover;  */
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 65px;
            }

            .sidebar .deskripsi {
                display: none;
            }

            .main-content {
                margin-left: 65px;
            }

            .sidebar .logo {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="nav flex-column">

            <a href="{{ route('katalog') }}" class="logo-img">
                <img src="{{ asset('images/logo ollo.png') }}" alt="" class="logo">
            </a>
            <a href="/dashboard/posts" class="nav-link">
                <span data-feather="grid"></span>
                <span class="deskripsi">Dashboard</span>
            </a>
            <a href="#" class="nav-link">
                <span data-feather="book"></span>
                <span class="deskripsi">History</span>
            </a>
            <a href="#" class="nav-link">
                <span data-feather="bar-chart"></span>
                <span class="deskripsi">Rating</span>
            </a>
            
            <a href="#" class="nav-link">
                <span data-feather="calendar"></span>
                <span class="deskripsi">Schedule</span>
            </a>
            <a href="#" class="nav-link">
                <span data-feather="list"></span>
                <span class="deskripsi">Order List</span>
            </a>
            
            <a href="#" class="nav-link">
                <span data-feather="settings"></span>
                <span class="deskripsi">Settings</span>
            </a>

            <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span data-feather="log-out"></span>
                <span class="deskripsi">
                    Logout
                </span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf</form>

        </div>
    </div>

    <div class="main-content mt-2">
        @yield('dashboard-panel')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script>
        feather.replace();
    </script>




</body>

</html>
