@extends('dashboard_frelancer.layouts.sidebar')

@section('dashboard-panel')

<style>
    .container{
        /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
        /* background-color: beige; */
    }

    .container-dua{
        background-color: beige;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center ">
        <div class="col-lg-10 ">
            <div class="card border-0 shadow" style="border-radius: 15px; overflow: hidden;">
                <div class="row g-0 ">
                    <div class="col-md-5 bg-success d-flex align-items-center justify-content-center p-4 ">
                        <div class="shadow-sm rounded" style="overflow: hidden; border: 8px solid rgb(255, 255, 255);">  
                                <img src="{{ asset('storage/' . $lihat->image) }}" class="img-fluid" alt="Preview">
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <h6 class="text-primary fw-bold text-uppercase small mb-1">Detail Portofolio</h6>
                                <h2 class="fw-bold text-dark">{{ $lihat->judul_portofolio }}</h2>
                                <p class="text-muted">{{ $lihat->detail_portofolio}}</p>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted border-0 ps-0" width="40%"><i class="bi bi-calendar3 me-2"></i> Upload Date</td>
                                            <td class="fw-semibold border-0 text-end">{{ $lihat->created_at->format('Y-m-d') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted border-0 ps-0"><i class="bi bi-tag me-2"></i> Category</td>
                                            <td class="text-end border-0"><span class="badge bg-secondary">E-sports</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted border-0 ps-0"><i class="bi bi-check-circle me-2"></i> Status</td>
                                            <td class="text-end border-0"><span class="badge bg-success">Published</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

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


@endsection