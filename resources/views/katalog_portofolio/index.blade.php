@extends('layouts.app')

@section('content-hero')
    <style>
        .isi_hero {
            background-image: url({{ asset('images/esport_stage.jpg') }});
            width: 100%;
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 0px 100px;
            display: flex;
            justify-content: first;
            align-items: center;
            /* mask-image: linear-gradient(to bottom, #7c4dff 60%, transparent); */
        }

        .name {
            font-family: 'poppins', sans-serif;
            color: white;
            filter: brightness(100%);
            font-weight: bold;
            font-size: 80px;

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

        
    </style>
    <div    class="isi_hero">
        <div class="deskripsi">
            <h1 class="name">Arya Putra Irwansyah</h1>
            <h2 class="profesi">Graphic designer</h2>
            <button type="button" class="btn btn-primary btn-lg tombol">Booking Design</button>
        </div>
    </div>
@endsection
