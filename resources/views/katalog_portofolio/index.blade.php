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
            font-size: 50px;
            text-transform: uppercase;

        }

        .profesi {
            font-family: 'poppins', sans-serif;
            color: white;
            filter: brightness(100%);
            text-transform: uppercase;
        }

        .tombol {
            background-color: #7c4dff;
            border: none;
            color: white;
            text-align: center;
            font-family: "poppins", sans-serif;
            font-weight: bold;
            margin-top: 10px;
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
            <h1 class="name">{{ auth()->user()->nama_lengkap }}</h1>
            <h2 class="profesi">{{ auth()->user()->profesi }}</h2>
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
            color: #5a3faa;

        }

        .title_my_design {
            font-weight: bold;
            font-size: 50px;
            /* text-transform: uppercase; */

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
            /* width: 740px; */
            height: 780px;
            object-fit: cover;
            border-radius: 10px;
        }

        .swiper {
            width: 100%;
        }

        .myswiper {
            overflow: hidden;
            /* max-width: 1200px; */
        }

        .link_show_more{
            
            font-family: "poppins", sans-serif;
            font-weight: bold;
            text-align: center;
            justify-items: center;
            align-items: center;
            color: #221153;
        }

        .image_kata-kata{
            background-image: url({{ asset('images/glenn-carstens-peters-npxXWgQ33ZQ-unsplash.jpg') }});
            width: 100%;
            height: 80vh;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            mask-image: linear-gradient(to top, #7c4dff 60%, transparent);
            
        }

        .kata-kata{
            font-family: "poppins", sans-serif;
            font-weight: bold;
            color: white;
            font-size: 50px;
        }

        .deskrips_kata-kata{
            font-family: "poppins", sans-serif;
            justify-items: center;
        }
        
        .subtext_kata-kata{
            font-family: "poppins", sans-serif;
            justify-items: center;
            color: white;
            font-size: 20px;
        }

        



    </style>
    <div class="slide_porto d-xxl-flex px-5 px-md-5 mt-5">
        <h1 class="title_my_design"> My portofolio</h1>
        {{-- <h2 class="subtitle_my_design">Ini adalah hasil karya saya</h2> --}}
    </div>

    <div class="card_item px-5 px-md-5 mt-3 swiper myswiper">
        <div class="swiper-wrapper">
            @foreach ( $porto as $view)
                
            <img src="{{ asset('storage/' . $view->image) }}" alt="{{ $view->slug }}" class="design_aku mx-2 swiper-slide">
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <div class="link_show_more mt-4 ">
        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-black"
        href="#">
        Show More Portofolio
    </a>
    </div>

    <div class="image_kata-kata px-5 px-md-5 mt-5">
        <div class="deskripsi_kata-kata">
        <h1 class="kata-kata">"Karya yang bagus adalah karya yang kamu sukai"</h1>
        <h2 class="subtext_kata-kata"> Saya membantu bisnis dan brand membangun visual yang profesional dan konsisten melalui fotografi produk, makanan, dan campaign digital.</h2>
        </div>
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
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    </script>
@endpush
