@extends('dashboard_admin.layouts.sidebar')

@section('content')
<style>
    .card{
        border-radius: 15px;
        height: 100%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover{
        transform: translateY(-5px);
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.3);
    }

    .card-img-top{
        height: 210px;
        object-fit: cover;
        object-position: center;;
    }

    .profile-image{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        margin-top: -60px;
        margin-left: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        
    }

    .card-body{
        padding-top: 5px;
    }

    .card-title{
        margin-bottom: 10px;
        font-weight: 600;
    }

    .card-text{
        color: #666;
        font-size: 14px;
        margin-bottom: 8px;
    }


</style>

<div class="container">
    <h1>Approved Freelancers</h1>
    <div class="row gx-3 gy-3 mt-2">
        @if (isset($approvedFrelancers) && $approvedFrelancers->count()>0)
            @foreach ($approvedFrelancers as $item)
                <div class="col col-lg-6 h-100">
                    <div class="card">
                        <img src="{{ \App\Helpers\ProfessionHelper::getCoverImage($item->profesi) }}" alt="preview image" class="card-img-top">

                        @if ($item->profile_image)

                            <img src="{{ asset('storage/' . $item->profile_image) }}" alt="{{ $item->nama_lengkap }}" class="profile-image">
                            
                        @else
                            <img src="{{ asset('images/Fabian keren.jpg') }}" alt="profile-image" class="profile-image">
                        @endif

                        <div class="card-body ms-2">
                            <h1 class="card-title">{{ $item->nama_lengkap }}</h1>
                            <h4 class="card-text">Profesi: {{ $item->profesi }}</h4>
                            <h4 class="card-text">Email: {{ $item->email }}</h4>
                            <h4 class="card-text">Status: <span class="badge bg-success">Approved</span></h4>

                            @if (isset($approvedFrelancers) && $approvedFrelancers->count()>0)
                                <form action="{{ route('freelancer.reject', $item->frelance_id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn btn-sm btn-danger mt-2 rounded"><span data-feather="slash"></span> Banned</button>
                            </form>
                            @else
                                <form action="{{ route('freelancer.approve', $item->frelance_id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn btn-sm btn-success mt-2 rounded"><span data-feather="check"></span> Approve</button>
                            </form>
                            @endif
                            
                            
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No approved freelancers yet.</p>
        @endif
    </div>
</div>
@endsection
