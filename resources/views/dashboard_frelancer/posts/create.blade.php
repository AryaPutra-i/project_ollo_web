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
            color: #7c4dff;
            background-color: #ffffff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
            /* font-weight: bold; */
            /* text-align: center; */
            justify-items: center;

        }

        h2 {
            font-weight: bold;
            font-size: 1.8em;
            
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
                <form method="POST" action="{{ route('dashboard.posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul_portofolio" class="form-label">Judul Portofolio</label>
                        <input type="text" class="form-control @error('judul_portofolio') is-invalid @enderror" id="judul_portofolio" name="judul_portofolio" required autofocus value="{{ old('judul_portofolio') }}">
                        @error('judul_portofolio')
                            <div class="invalid-feedbaack">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <div id="sluginfo" class="form-text">Slug otomatis terisi sesuai title atau bisa di isi sendiri</div>
                        <input type="text" class="form-control @error('slug')
                            is-invalid
                        @enderror" id="slug" name="slug" required value="{{ old('slug') }}">

                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="detail_portofolio" class="form-label">Deskripsi Portofolio</label>
                        <textarea class="form-control descripsi-area" id="detail_portofolio" rows="3" name="detail_portofolio"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Portofolio</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary" > <span data-feather="upload"></span> Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $('#judul_portofolio').on('change', function() {
        let judul_portofolio = $(this).val();
        
        $.ajax({
            url: '/dashboard/posts/checkSlug',
            type: 'GET',
            data: {judul_portofolio: judul_portofolio },
            dataType: 'json',
            success: function(data) {
                // Mengisi value input slug secara otomatis
                $('#slug').val(data.slug);
            },
            error: function(xhr) {
                console.error("Gagal mengambil slug: " + xhr.responseText);
            }
        });
    });
</script>
@endsection
