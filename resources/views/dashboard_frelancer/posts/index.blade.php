<style>
    .tombol-manage {
        text-decoration: none;
        font-family: 'poppins', sans-serif;
        font-weight: bold;
    }
</style>

<div class="table-upload table-responsive">
    <div class="tombol-upload mt-5">
        <a class="btn btn-primary" href="{{ route('dashboard.posts.create') }}" role="button"> <span data-feather="upload"></span> Upload
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
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $item->judul_portofolio }}</td>
                    <td>{{ $item->detail_portofolio }}</td>
                    <td>
                        <a href="" type="button" class="tombol-manage btn btn-success btn-sm"><span
                                data-feather="eye"></span> View</a>
                        <a href="" type="button" class="tombol-manage btn btn-warning btn-sm"><span
                                data-feather="edit"></span> Edit</a>
                        <a href="" type="button" class="tombol-manage btn btn-danger btn-sm"><span
                                data-feather="trash-2"></span> Delete</a>
                    </td>
                </tr>

            @endforeach
                
                
                
        </tbody>
    </table>

</div>
