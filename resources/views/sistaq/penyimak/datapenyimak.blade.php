@extends('master.layouts')

@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Ustadz Penyimak Tahfidz</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Data Ustadz Penyimak Tahfidz</a></li>
          <li class="breadcrumb-item active">Admin</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data ustadz penyimak program tahfidz ponpes sunan pandanaran</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">

              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>

            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-head-fixed table-hover table-bordered">
            <thead class="text-center">
            <tr>
              <th>No</th>
              <th>NIP</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>No Hp</th>
              <th>Program</th>
              <th>Username</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach ($ustadzs as $penyimak)
                <tr>
                <td>{{ $no }}</td>
                <td>{{ $penyimak->nip }}</td>
                <td>{{ $penyimak->nama_penyimak }}</td>
                <td>{{ $penyimak->jenis_kelamin }}</td>
                <td>{{ $penyimak->no_hp }}</td>
                <td>{{ $penyimak->program }}</td>
                <td>{{ $penyimak->username }}</td>
                <td>{{ $penyimak->password }}</td>
                <td class="text-center">

                        <a href="">
                            <span class="btn btn-warning" style="font-size: 10px;" title="lihat">
                            <i class="fas fa-eye"></i></span>
                        @csrf

                </td>
                </tr>
                <?php $no++ ;?>
                @endforeach
                </tbody>
                <tfoot class="text-center">
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No Hp</th>
                    <th>Program</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </tfoot>
          </table>
        </div>
    </div>
        <!-- /.card-body -
</section>
<!-- /.content -->

@endsection
