@extends('admin.template.app')

@section('title')
    Home
@endsection


@section('content')
    <div class="row">
        <h1>Apa itu E-Sinfo</h1>
    </div>
    <div class="wrapper row2 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
        <section class="hoc container clear">
          <!-- ################################################################################################ -->
          <div class="sectiontitle">
            <h6 class="heading">Sinfo yaitu Sistem Informasi Sekolah yang memudahkan admin dalam mendata Pengumuman.
                Dengan sistem informasi sekolah, lembaga pendidikan akan lebih mudah dalam pengolahan data.
                Baik itu data akademik ataupun data non akademik dengan lebih efektif.
                Data tersebut bisa tersaji dengan rapi dan terstruktur dengan sistem informasi yang ada di sekolah.
            </h6>
            <p>Sistem Informasi Sekolah memiliki 3 fitur :</p>
          </div>
          <ul class="nospace group overview">
            <li class="one_third">
              <article><a href=""><i class="fa fa-headphones"></i></a>
                <h6 class="heading"><a href="">User</a></h6>
                <p>Data Admin yang bisa mengkses Aplikasi E-Sinfo Sekolah</p>
                {{-- <footer><a href="#">View Details &raquo;</a></footer> --}}
              </article>
            </li>
            <li class="one_third">
              <article><a href=""><i class="fa fa-asl-interpreting"></i></a>
                <h6 class="heading"><a href="">Daftar Pengumuman</a></h6>
                <p>Terdapat Data Acara, Tanggal, dan Untuk kelas berapa pengumuman diberikan</p>
                {{-- <footer><a href="#">View Details &raquo;</a></footer> --}}
              </article>
            </li>
            <li class="one_third">
              <article><a href=""><i class="fa fa-area-chart"></i></a>
                <h6 class="heading"><a href="">Penanggung Jawab</a></h6>
                <p>Data Nama Penanggung Jawab Acara beserta Nomor WhatsApp</p>
                {{-- <footer><a href="#">View Details &raquo;</a></footer> --}}
              </article>
            </li>
          {{-- <footer class="center"><a class="btn" href="#">Kembali ke Atas</a></footer> --}}
          <!-- ################################################################################################ -->
        </section>
      </div>
@endsection
