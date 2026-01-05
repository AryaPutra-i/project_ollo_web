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


        .container .form-porto {
            height: 500px;
            width: 750px;
            /* text-align: center; */

        }

        .descripsi-area{
            resize: none;
        }

    </style>

    <div class="container mt-5">
        <h1 class="header-upload-page">Upload Portofolio</h1>
       <div class="form-porto mt-5">
                <form method="POST" action="/dashboard/posts" enctype="multipart/form-data">
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
                        <img class="img-preview img-fluid mb-3 col-sm-4">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                         
                    </div>
                    <button type="submit" class="btn btn-primary mb-5" > <span data-feather="upload"></span> Submit</button>
                </form>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    const title = document.querySelector('#judul_portofolio');
    const slug = document.querySelector('#slug');


    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?judul_portofolio=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });



    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);


        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;

        }
    }

    
</script>
@endsection
