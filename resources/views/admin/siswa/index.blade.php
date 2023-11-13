@extends('admin.template.app')

@section('title', 'Master Pengumuman')

@section('content')
    <div class="col-xxl">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="fw-bold m-0">Daftar Pengumuman</h4>
                <div class="d-flex gap-1 justify-content-end align-items-center">
                    <a href="{{ route('pengumuman.create') }}">
                        <button type="button" class="btn btn-primary">
                            <span class="tf-icons bx bx-plus"></span>&nbsp;Tambah Pengumuman</button>
                    </a>
                </div>
            </div>
            <hr class="m-0 " />
            <div class="card-body">
                <div class="table-responsive text-nowrap mb-4">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Tanggal</th>
                                <th>Topik</th>
                                <th>Informasi</th>
                                <th>Kelas</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($siswa as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img width="200px" height="100px" src="/storage/pengumuman/{{ $item->foto}}" alt="Foto"></td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->topik }}</td>
                                    <td>{{ $item->informasi }}</td>
                                    <td>{{ $item->kelas }}</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="{{ route('pengumuman.edit', $item->id) }}">
                                                <button type="button" class="btn btn-icon btn-warning">
                                                    <span class="tf-icons bx bx-edit"></span>
                                                </button>
                                            </a>
                                            <form action="{{route('pengumuman.destroy', $item->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-icon btn-danger"><span class="tf-icons bx bx-trash"></span></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        function deleteUser(deleteurl) {
            $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                swal({
                        title: "Apakah anda yakin?",
                        text: "Setelah dihapus, Anda tidak dapat memulihkan data ini lagi!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                type: "DELETE",
                                url: deleteurl,
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                },
                                success: function(response) {
                                    swal(response.status, {
                                            icon: "success",
                                        })
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
            });

        }
    </script>
@endsection
