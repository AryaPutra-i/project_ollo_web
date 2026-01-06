<style>
    .tombol-manage {
        text-decoration: none;
        font-family: 'poppins', sans-serif;
        font-weight: bold;
    }
</style>

<div class="table-upload table-responsive">
    @if (session()->has('success'))

        <div class="alert alert-success mt-3" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="tombol-upload mt-5">
        <a class="btn btn-primary" href="/dashboard/posts/create" role="button"> <span data-feather="upload"></span> Upload
            Portofolio</a>
    </div>
    <table class="table table-hover table-bordered border-dark mt-3 ">
        <thead class="table-dark ">
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Manage</th>
        </thead>
        <tbody>

            @foreach ($porto as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul_portofolio }}</td>
                    <td>{{ $item->detail_portofolio }}</td>
                    <td>
                        <a href="{{ route('posts.show', $item->slug) }}" type="button" class="tombol-manage btn btn-success btn-sm"><span
                                data-feather="eye"></span> View</a>
                        <a href="{{route('posts.edit', $item->slug)}}" type="button" class="tombol-manage btn btn-warning btn-sm"><span
                                data-feather="edit"></span> Edit</a>

                        <form action="{{ route('posts.destroy', $item->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="tombol-manage btn btn-danger btn-sm"
                                onclick="return confirm('Apakah kamu yakin?')"> <span data-feather="trash-2"></span>
                                Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>

</div>
