@extends('dashboard_frelancer.layouts.sidebar')

@section('dashboard-panel')
    <style>
        * {
            margin: 0;
            padding: 0;
            font-size: 18px;

        }

        .main-dashboard {
            margin-top: 50px;
            margin-left: 25px;
            margin-right: 25px;
            /* display: grid; */
        }

        /* header */
        .header-dashboard {
            display: grid;
            grid-template-areas: 'profil total-pengerjaan';
            gap: 15px;
            /* justify-items: center; */
        }

        .profil {
            grid-area: profil;
            /* width: 600px; */
            min-height: 250px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
            padding: 10px;
            box-sizing: border-box;
        }

        .profil .isi-profil {
            display: flex;
            flex-direction: row;
            /* align-items: center; */
            /* justify-items: center; */
            background: linear-gradient(90deg, rgba(220, 204, 252, 1) 0%, rgba(124, 77, 255, 0.8) 56%, rgba(124, 77, 255, 1) 100%);
            border-radius: 25px;
            height: 70%;
            color: white;
            padding: 20px;
            margin: 20px;
            /* align-content: center; */
            box-sizing: border-box;
        }

        .profil .isi-profil .biodata .nama {
            font-weight: bold;
            font-size: 2em;
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
        }

        .profil .isi-profil .biodata .profesi {
            font-weight: bold;
            font-size: 1em;
            background-color: #ffffff;
            border-radius: 5px;
            color: #4f22ca;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            /* padding: 5px; */
            width: fit-content;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
        }

        .profil .isi-profil .biodata .link-url {
            /* background-color: #ffffff; */
            /* box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25); */
            font-weight: bold;
            font-size: 1em;
            color: #ffffff;
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);

        }

        .profil .isi-profil .biodata .link-url .link-asli {
            font-weight: normal;
            font-size: 1em;
            color: #ffffff;
            text-decoration: none;
        }


        .profil .isi-profil .biodata {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding-left: 10px;
            /* align-items: center; */
        }



        .profil .isi-profil .profil-image {
            /* overflow: hidden; */
            width: 130px;
            height: 130px;
            border-radius: 100%;
            border: 4px solid #ffffff;
            background-size: cover;
            box-sizing: border-box;
            margin-right: 10px;


        }

        /* button share */

        .profil .isi-profil .tombol {
            /* display: flex;
               flex-direction: row; */
            height: fit-content;
            /* align-items: end; */
            margin-top: 5px;
        }

        .profil .isi-profil .tombol .tombol-share {
            border: none;
            font-weight: bold;
            border-radius: 5px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 2px;
            padding-bottom: 2px;
            background-color: #ffffff;
            margin-left: 25px;
            box-sizing: border-box;
            color: #4f22ca;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);


        }

        .profil .isi-profil .tombol .tombol-share:hover {
            background-color: #4f22ca;
            color: #ffffff;
        }



        /*total pengerjaan  */
        .total-pengerjaan {
            display: grid;
            grid-area: total-pengerjaan;
            /* width: 600px; */
            /* background-color: #ffffff; */
            border-radius: 10px;
            place-content: center;
            text-align: center;
            background-size: cover;
            /* box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.25); */
            box-shadow: inset 7px 7px 20px 2px rgba(0, 0, 0, 0.45);
            background-image: url({{ asset('images/13399000_5238295.jpg') }});
        }

        .total-pengerjaan .isi-total-card{
            color: #ffffff;
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);


        }

        .total-pengerjaan .isi-total-card .pengerjaan {
            font-weight: bold;
            font-size: 10em;
            line-height: 0.8em;
        }

        .total-pengerjaan .isi-total-card .subtext {
            font-weight: 200;
            font-size: 1.5em;
        }

        .profil .heading {
            font-weight: bold;
            font-size: 1.2em;
            margin-left: 15px;
            margin-top: 10px;
            color: #4f22ca;
        }
    </style>

    <div class="main-dashboard">
        <header class="header-dashboard">
            <div class="profil">
                <h2 class="heading">User Account</h2>
                <div class="isi-profil">
                    <img src="{{ asset('images/image_profil.JPG') }}" alt="" class="profil-image">
                    <div class="biodata">
                        <h2 class="nama">Arya Putra Irwansyah</h2>
                        <h3 class="profesi">Graphic Designer</h3>
                        <p class="link-url">Link Url :
                            <a href="" class="link-asli">https://www.sample.org/plot</a>
                        </p>
                    </div>
                    <div class="tombol">
                        <button type="button" class="tombol-share">➦ Share</button>
                    </div>
                </div>
            </div>
            <div class="total-pengerjaan">
                <div class="isi-total-card">
                    <h2 class="pengerjaan">80</h2>
                    <h3 class="subtext">Design Completed</h3>
                </div>
            </div>
        </header>
        
        @include('dashboard_frelancer.posts.index')
    </div>
@endsection
