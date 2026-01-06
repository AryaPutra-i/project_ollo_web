@extends('dashboard_frelancer.layouts.sidebar')

@section('dashboard-panel')
    <style>
   .wrapper-preview{
    background-color: #74c;
   }
</style>

<div class="container py-5">
    <div class="row justify-content-center ">
        <div class="col-lg-10 ">
            <div class="card border-0 shadow" style="border-radius: 15px; overflow: hidden;">
                <div class="row g-0 ">
                    <div class="col-md-5 d-flex align-items-center justify-content-center p-4 wrapper-preview">
                        <div class="shadow-sm rounded" style="overflow: hidden; border: 8px solid rgb(255, 255, 255);">  
                            @if(!$edit_halaman->image)
                            <img class="img-fluid img-preview" alt="Preview">
                            
                            @else
                            <img src="{{ asset('storage/' . $edit_halaman->image) }}" class="img-fluid" alt="Preview">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <h6 class="text-primary fw-bold text-uppercase small mb-1">Detail Portofolio</h6>
                                <h2 class="fw-bold text-dark">p</h2>
                                <p class="text-muted">p</p>
                            </div>

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
                        <!-- <img class="img-preview img-fluid mb-3 col-sm-4"> -->
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                         
                    </div>
                    <button type="submit" class="btn btn-primary mb-5" > <span data-feather="upload"></span> Submit</button>
                </form>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                                <a href="#" class="btn btn-primary px-4 shadow-sm">
                                    <span data-feather="edit"></span> Edit Portofolio
                                </a>
                                <a href="{{ route('posts.index') }}" class="btn btn-outline-dark px-4">
                                    <span data-feather="skip-back"></span> Back to List
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>

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