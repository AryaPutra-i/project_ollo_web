@extends('layouts.app')

@section('content-hero')
    <style>
        .isi_hero {
            background-image: url({{ asset('images/esport_stage.jpg') }});
            width: 100%;
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            /* padding: 0px 100px; */
            display: flex;
            /* justify-content: center; */
            align-items: center;
            /* mask-image: linear-gradient(to bottom, #7c4dff 60%, transparent); */

        }

        .name {
            font-family: 'poppins', sans-serif;
            color: white;
            filter: brightness(100%);
            font-weight: bold;
            font-size: 40px;

        }

        .profesi {
            font-family: 'poppins', sans-serif;
            color: white;
            filter: brightness(100%);
        }

        .tombol {
            background-color: #7c4dff;
            border: none;
            color: white;
            text-align: center;
            font-family: "poppins", sans-serif;
            font-weight: bold;
            margin-top: 30px;
        }

        .deskripsi {
            justify-content: first;
            align-items: center;
        }

        body {
            background-color: #F8F5FF;
        }
    </style>
    <div class="isi_hero px-5 px-md-5">
        <div class="deskripsi ">
            <h1 class="name">Arya Putra Irwansyah</h1>
            <h2 class="profesi">Graphic designer</h2>
            <button type="button" class="btn btn-primary btn-lg tombol">Booking Design</button>
        </div>
    </div>
@endsection

@section('content')
    <style>
        .slide_porto {
            display: flex;
            flex-direction: column;
            font-family: "poppins", sans-serif;
            color: black;

        }

        .title_my_design {
            font-weight: bold;
            font-size: 40px;

        }

        .subtitle_my_design {
            font-size: 20px;
            /* font-weight: bold; */
            /* margin-top: 5px; */
        }

        .card_item {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .design_aku {
            width: 740px;
            border-radius: 10px;
        }

        .swiper{
            width: 100%;
        }

        .myswiper{
            overflow: hidden;
            /* max-width: 1200px; */
        }

       
    </style>
    <div class="slide_porto d-xxl-flex px-5 px-md-5 mt-5">
        <h1 class="title_my_design">My Design</h1>
        <h2 class="subtitle_my_design">Ini adalah hasil karya saya</h2>
    </div>

    <div class="card_item px-5 px-md-5 mt-3 swiper myswiper">
        <div class="swiper-wrapper">
            <img src="{{ asset('images/Challenge design 1.jpg') }}" alt="design1" class="design_aku mx-2 swiper-slide">
            <img src="{{ asset('images/arya_api-Thanks for ae.jpg') }}" alt="design2" class="design_aku mx-2 swiper-slide">
            <img src="{{ asset('images/arya_api_super brief 2.jpg') }}" alt="design3" class="design_aku mx-2 swiper-slide">
            <img src="{{ asset('images/challenge design 4 rev.jpg') }}" alt="design4" class="design_aku mx-2 swiper-slide">
            <img src="{{ asset('images/Challenge design 3.jpg') }}" alt="design5" class="design_aku mx-2 swiper-slide">
            <img src="{{ asset('images/Challenge design 2 revisi.jpg') }}" alt="design6" class="design_aku mx-2 swiper-slide">
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
@endsection

@push('scripts')
    <script>
        const swiper = new Swiper('.myswiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 10,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 640px
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30
                }
            }
        });
    </script>
@endpush



