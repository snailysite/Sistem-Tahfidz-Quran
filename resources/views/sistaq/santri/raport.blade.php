@extends('master.raport')
@section('content')

<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark text-center">
      <div class="col-md px-0">
          {{ csrf_field() }}
          <div class="text-center">
          <img class="profile-user-img img-fluid img-circle"
          src="{{ asset('admin/dist/img/avatar5.png') }}"
          alt="User profile picture">
          </div>
          {{--  <img src="{{ asset('storage/app/post-image'. $santri->foto) }}" alt="">  --}}
        <br>
        <h1><strong>{{ $santri->nama_santri }}</strong></h1>
        <p class="lead my-3">{{ $santri->program }}</p>
      </div>
    </div>

    <!-- About Me Box -->
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Biodata</h3>
            </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-user-alt mr-1"></i> Nama Santri</strong>
                        <p class="text-muted">
                            {{ $santri->nama_santri }}
                        </p>
                        <hr>
                    <strong><i class="fa fa-mars"></i> Jenis Kelamin</strong>
                        <p class="text-muted">
                            {{ $santri->jenis_kelamin }}
                        </p>
                        <hr>
                    <strong><i class="fas fa-book mr-1"></i> Program</strong>
                        <p class="text-muted">
                            {{ $santri->program }} Pondok Pesantren Sunan Pandanaran.
                        </p>
                        <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                        <p class="text-muted">{{ $santri->alamat }}</p>
                        <hr>
                    <strong><i class="fas fa-phone-alt mr-1"></i> No Hp</strong>
                        <p class="text-muted">
                            +62-{{ $santri->no_hp }}
                        </p>
                        <hr>
                    <strong><i class="fas fa-user-alt mr-1"></i> Nama Orangtua</strong>
                        <p class="text-muted">
                            {{ $santri->nama_ortu }}
                        </p>
                        <hr>
                    <strong><i class="fa fa-calendar"></i> Tanggal Lahir</strong>
                        <p class="text-muted">
                            {{ $santri->tgl_lahir }}
                        </p>
                        <hr>
                </div>
                <!-- /.card-body -->
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="text-center"><strong>Progres Hafalan</strong></h3>
            </div>
            <div class="card-body">
              <div class="progress-group">
                Juz 16, Surah....., Ayat.....
                <span class="float-right"><b>60</b>/100</span>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-primary" style="width: 60%"></div>
                </div>
              </div>
            </div>
            <div class="card-footer text-center">
                <a href="">Lihat Perkembangan Santri</a>
              </div>
              <!-- /.progress-group -->
        </div>
        <div class="card" style="background-color: #aed581">
            <div class="card-header">
                <h3 class="text-center"><strong>Contact Us</strong></h3>
            </div>
            <div class="card-body" style="background-color: #e1ffb1">
                <h3 class="text-primary"><strong>SISTAQ</strong></h3>
                <p class="text-muted">SISTAQ merupakan Sistem Pendataan Santri Tahfidz Qur'an Pondok Pesantren Sunan Pandanaran.</p>
                <h5 class="mt-5 text-muted">Contact us</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="fas fa-phone-alt mr-1"></i> +62-888888888888</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> alamatemail.com</a>
                  </li>
                </ul>
            </div>
        </div>
          <!-- /.progress-group -->
    </div>
</div>





@endsection
