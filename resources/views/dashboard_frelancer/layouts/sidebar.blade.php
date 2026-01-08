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

        .container-content {
            display: flex;
            /* position: fixed; */

            
            
            
        }

        .sidebar {
            background-color: #2C2C2C;
            width: 268px;
            height: 120vh;
            /* width: 87px; */
            padding: 20px;
            display: flex;
            /* flex-direction: row; */
            /* position: fixed; */
            box-sizing: border-box;
            transition: all ease-in 0.3s;
            /* overflow: auto; */

           
        }


        .sidebar.hide{
            width: 85px;
            transition: all ease-out 0.3s;
            /* position: sticky; */
        }

        .sidebar .description-header {
            font-weight: bold;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
            color: #FFFFFF;

        }

        .sidebar.hide .description-header {
            display: none;
        }


        .sidebar a {
            text-decoration: none;
        }

        .list-item .icon {
            width: 30px;
            margin-bottom: 8px;
            margin-left: -2px;
            /* margin-right: 12px; */
            align-items: center;
            justify-items: center

        }

        .sidebar .header .list-item {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 12px 10px;
            border-radius: 8px;
            height: 40px;
            box-sizing: border-box;
            margin-bottom: 12px;
        }

        .sidebar .header .list-item .icon {
            margin-right: 8px;
        }

        .sidebar .header .logo-ollo .logo {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 10px;
            margin: 12px 0 25px 0;
            box-sizing: border-box;
            width: 212px;

        }

        .sidebar.hide .logo-ollo .logo {
            display: none;
        }


        .sidebar .main-sidebar .list-item .description {
            font-weight: 700;
            font-size: 16px;
            line-height: 16px;
            text-align: center;
            color: #FFFFFF;
        }

        .sidebar.hide .main-sidebar .list-item .description {
            display: none;
        }


        .sidebar .main-sidebar .list-item .icon-menu{
            margin-right: 8px;
            width: 25px;
        }

        .sidebar .main-sidebar .list-item {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 12px 10px ;
            border-radius: 5px;
            /* width: 212px; */
            box-sizing: border-box;
            margin-bottom: 12px;
        }

        .sidebar .main-sidebar .list-item:hover {
             background-color: #7C4DFF;
             transition: all ease-in .2s;
        }

        /* main panel */
        .main-panel {
            width: 100vw; 
            height: 100%;
            padding: 20px;
            /* overflow: hidden; */
            /* box-sizing: border-box; */
        }

       

        /* toogle menu */
        #menu-button {
            width: 32px;
            position: absolute;
            overflow: hidden;
            margin: 12px;
        }

        #menu-label{
            position: relative;
            display: block;
            height: 20px;
            cursor: pointer;
        }

        #menu-checkbox{
            display: none;
        }

        #hamburger, #menu-label:after, #menu-label:before{
            position: absolute;
            left: 0;
            width: 100%;
            height: 4px;
            background-color:#2C2C2C;
            /* background-color:#ffffff; */

        }

        #menu-label:after, #menu-label:before{
            content: "";
            transition: 0.4s cubic-bezier(0.075, 0.82, 0.165, 1) left;
        }

        #menu-label:before{
            top:o;
        }

        #menu-label:after{
            top: 8px;
        }

        #hamburger{
            top: 16px;
        }

        #hamburger:before{
            content: "MENU";
            position: absolute;
            top: 5px;
            right: 0;
            left: 0;
            color: #2C2C2C;
            font-size: 10px;
            font-weight: bold;
            text-align: center;
        }

        #menu-checkbox:checked + #menu-label::before {
            left: -39px;
        }

        #menu-checkbox:checked + #menu-label::after{
            left: 39px;
        }

        #menu-checkbox:checked + #menu-label #hamburger::before{
            animation: moveUpThenDown 0.8s ease 0.2s forwards,
            shakeUp 0.8s ease 0.2s forwards, 
            shakeDown 0.2s ease 0.8s forwards;
        }

       

       

        @keyframes moveUpThenDown{
            0%{
                top: 0;
            }
            50%{
                top: -27px;
            }
            100%{
                top: -14px;
            }
            
        }

        @keyframes shakeUp{
            0%{
                transform: rotate(0);
            }
            25%{
                transform: rotateZ(-10deg);
            }
            50%{
                transform: rotateZ(0);
            }
            75%{
                transform: rotateZ(10deg);
            }
            100%{
                transform: rotateZ(0)
            }
            
        }

        @keyframes shakeDown{
            0%{
                transform: rotateZ(0);
            }
            80%{
                transform: rotateZ(3deg);
            }
            90%{
                transform: rotateZ(-3deg);
            }
            100%{
                transform: rotateZ(0);
            }
  
        }


    </style>
</head>

<body>
    <div class="container-content">
        <div class="sidebar" >
            <div class="header">
                <div class="list-item ">
                    <a href="#" >
                        <img src="{{ asset('images/portofolio.png') }}" alt="" class="icon">
                        <span class="description-header">Online Look & Order</span>
                    </a>
                </div>

                <div class="logo-ollo">
                    <a href="{{ route('katalog') }}">

                        <img src="{{ asset('images/logo ollo.png') }}" alt="" class="logo">
                    </a>
                </div>
                <div class="main-sidebar">
                    <div class="list-item {{ Request::is('dashboard/posts')? 'active' : '' }}">
                        <a href="/dashboard/posts" >
                            <img src="{{ asset('images/dashboard.png') }}" alt="" class="icon-menu">
                            <span class="description">Dashboard</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="#" >
                            <img src="{{ asset('images/history.png') }}" alt="" class="icon-menu">
                            <span class="description">History</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="#">
                            <img src="{{ asset('images/rate.png') }}" alt="" class="icon-menu">
                            <span class="description">Rating</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="#">
                            <img src="{{ asset('images/calendar.png') }}" alt="" class="icon-menu">
                            <span class="description">Schedule</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="#">
                            <img src="{{ asset('images/clipboard.png') }}" alt="" class="icon-menu">
                            <span class="description">Order List</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="#">
                            <img src="{{ asset('images/setting.png') }}" alt="" class="icon-menu">
                            <span class="description">Settings</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <div class="main-content">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>
                
            </div>
        </div>
        <div class="main-panel">
            @yield('dashboard-panel')
        </div>
    </div>

    <script>
        const menu = document.getElementById('menu-label');
        const sidebar = document.getElementsByClassName('sidebar')[0];

        menu.addEventListener('click', function(){
            sidebar.classList.toggle('hide');
            console.log('ok')
        })

        feather.replace();          
    </script>

    
</body>

</html>
