@extends('admin.template.app')

@section('title', 'Tambah Pengumuman')

@section('content')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-4 text-gray-800">Tambah Pengumuman</h5>
                <a href="{{ route('pengumuman.index') }}">
                    <button type="button" class="btn btn btn-outline-danger" fdprocessedid="g81fsj"><i
                            class='bx bxs-chevron-left'></i>&nbsp;Kembali</button>
                </a>
            </div>
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach ($errors->all() as $item)
                                <li> {{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="{{ route('pengumuman.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="foto">Foto</label>
                                <input type="file" class="dropify form-control" name="foto" required />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mb-3">
                                <label class="form-label" for="tanggal">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label" for="text">Topik</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="topik" name="topik" class="form-control" placeholder="isi topik" required />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="form-label">Informasi</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" id="informasi" name="informasi" required>
                                </div>
                            </div>
                            <hr class="mb-3 " />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <select id="kelas" name="kelas" class="form-select" fdprocessedid="2tnrtb"
                                            placeholder="Pilih Kelas">
                                            <option disabled selected value="">Pilih Kelas</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col d-flex justify-content-end">
                                    <button type="submit" value="Save" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('.dropify').dropify();

        $('#kelas').select2();
    </script>

@endsection
