@extends('dashboard_frelancer.layouts.sidebar')

@section('dashboard-panel')
    <style>
        .container {
            justify-items: center;
        }

        .container .header-upload-page {
            font-weight: bold;
            color: #7c4dff;
            font-size: 4em;
            text-align: cen;

        }

        .container .wrapper-form-upload {}

        .container .wrapper-form-upload .view-porto {
            border-radius: 10px;
            height: 500px;
            width: 400px;
            color: #ffffff;
            background-color: #00c3ff;
            /* font-weight: bold; */
            /* text-align: center; */
            justify-items: center;

        }

        h2 {
            font-weight: bold;
            font-size: 1.5em;
        }

        .container .wrapper-form-upload .form-porto {
            height: 500px;
            width: 450px;
            /* text-align: center; */

        }

        .descripsi-area{
            resize: none;
        }

        .image-porto .image-view{
            width: 350px;
            height: 400px;
            justify-content: center;
            border-radius: 10px;
            object-fit: cover;
        }
    </style>

    <div class="container mt-5">
        <h1 class="header-upload-page">Upload Portofolio</h1>
        <div class="wrapper-form-upload row row-cols-1 row-cols-md-2 g-2 column-gap-3 mt-5">
            <div class="view-porto col">
                <h2 class=" pt-4 pb-2">View Portofolio</h2>
                <div class="image-porto">
                    <img src="{{ asset('images/glenn-carstens-peters-npxXWgQ33ZQ-unsplash.jpg') }}" alt="" class="image-view">
                </div>
            </div>
            <div class="form-porto col">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul Portofolio</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Portofolio</label>
                        <textarea class="form-control descripsi-area" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Portofolio</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <a href="#" type="submit" class="btn btn-primary">
                        <span data-feather="upload"></span>
                        Submit
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
