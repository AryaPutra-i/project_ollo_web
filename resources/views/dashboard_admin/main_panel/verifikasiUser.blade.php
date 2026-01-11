@extends('dashboard_admin.layouts.sidebar')

@section('content')
    <style>
        .card {
            border-radius: 15px;
            height: 100%;
        }

        /* .card-body {
            display: flex;
            flex-direction: column;
        }

        .card-text {
            flex-grow: 1;
        } */
    </style>
    <div class="container">

        <div class="row gx-3 gy-3 mt-2">
            @foreach ($userFrelance as $item)
                <div class="col col-lg-6 h-100">
                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_lengkap }}</h5>
                           <p class="card-text">Email: {{ $item->email }}</p>
                            <p class="card-text">Status: 
                                <span class="badge {{ $item->status ? 'bg-success' : 'bg-warning' }}">
                                    {{ $item->status ? 'Approved' : 'Pending' }}
                                </span>
                            </p>
                            <form action="{{ route('freelancer.approve', $item->frelance_id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn btn-sm btn-success">Approve</button>
                            </form>
                            <form action="{{ route('freelancer.reject', $item->frelance_id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn btn-sm btn-danger">Reject</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
