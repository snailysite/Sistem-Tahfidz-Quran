@extends('master.tambah')

@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tambah Data Santri Tahfidz</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Tambah Data Santri Tahfidz</a></li>
          <li class="breadcrumb-item active">Admin</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
        <div class="container-fluid">

          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Santri Tahfidz</h3>
            </div>
            <form action="/tambahdata" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_santri">Nama Santri</label>
                            <input type="text" id="nama_santri" name="nama_santri" class="form-control" style="width: 100%;" placeholder="input nama" required>
                            <br>
                            <label for="nisn">NISN</label>
                            <input type="text" id="nisn" name="nisn" class="form-control" style="width: 100%;" placeholder="input nisn" required>
                            <br>
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" style="width: 100%;" placeholder="input tempat lahir" required>
                            <br>
                                <label for="tgl_lahir">Tanggal Lahir</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" data-inputmask-alias="date" data-inputmask-inputformat="dd/mm/yyyy" placeholder="tanggal/bulan/tahun">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki">
                                <label class="form-check-label">Laki-laki</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">
                                <label class="form-check-label">Perempuan</label>
                              </div>
                            </div>
                            <br>
                                <label for="nama_ortu">Nama Orangtua</label>
                                <input type="text" id="nama_ortu" name="nama_ortu" class="form-control" style="width: 100%;" placeholder="input nama Orangtua">
                            <br>
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" rows="3" id="alamat" name="alamat" class="form-control" style="width: 100%;" placeholder="input alamat"></textarea>
                            <br>
                                <label for="no_hp">No Hp</label>
                                <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="input no hp">
                            </div>
                            <br>
                                <label for="program">Program Tahfidz</label>
                                <select class="form-control" style="width: 100%;" name="program">
                                <option selected>Pilih Program Tahfidz</option>
                                <option value="tahfidz 1">tahfidz 1</option>
                                <option value="tahfidz 2">tahfidz 2</option>
                                <option value="tahfidz 3">tahfidz 3</option>
                                </select>
                            <br>
                            <label for="foto">Upload Foto</label>
                            <input type="file" id="foto" name="foto" class="form-control" style="width: 100%;" accept="image/*">
                            <br>
                            <label for="username">Username</label>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">👨‍🦰</span>
                            </div>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                            </div>

                            <label for="password">Password</label>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">🔑</span>
                            </div>
                            <input type="text" id="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <br>
                            {{--  <label for="progres">Progres</label>  --}}
                            {{--  <input type="text" id="progres" name="progres" class="form-control" style="width: 100%;" placeholder="input progres santri">  --}}
                            <br>
                          <button type="submit" class="btn btn-success">Tambah Data</button>
                        </div>
                      </div>
                    </div>
                </div>
              </form>
          </div>
        </div>
</section>
<!-- /.content -->

@endsection
