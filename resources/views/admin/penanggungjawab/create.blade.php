@extends('admin.template.app')

@section('title', 'Tambah Penanggung Jawab')

@section('content')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-4 text-gray-800">Tambah Penanggung Jawab</h5>
                <a href="{{ route('pj.index') }}">
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
                    <form action="{{ route('pj.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="foto">Foto</label>
                                <input type="file" class="dropify form-control" name="foto" required />
                            </div>
                        </div> --}}
                        <div class="col-6">
                            <div class="row mb-3">
                                <label class="form-label" for="acara">Acara</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="acara" name="acara" placeholder="isi acara" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label" for="penanggungjawab">Penanggung Jawab</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="penanggungjawab" name="penanggungjawab" class="form-control" placeholder="isi penanggung jawab" required />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="form-label">Nomor Telepon</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" id="no_telp" name="no_telp" placeholder="isi nomor telepon" required>
                                </div>
                            </div>
                            {{-- <hr class="mb-3 " />
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
                            </div> --}}

                            <div class="row ">
                                <div class="col d-flex ">
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
