@extends('master.layouts')

@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Santri Tahfidz</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Data Santri Tahfidz</a></li>
          <li class="breadcrumb-item active">Admin</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data santri tahfidz ponpes sunan pandanaran</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-head-fixed table-hover table-bordered">
            <thead class="text-center">
            <tr>
              <th>No</th>
              <th>NISN</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Nama Ortu</th>
              <th>Alamat</th>
              <th>No Hp</th>
              <th>Program</th>
              <th>Username</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach ($santri as $santri)


                <tr>
                <td>{{ $no }}</td>
                <td>{{ $santri->nisn }}</td>
                <td>{{ $santri->nama_santri }}</td>
                <td>{{ $santri->jenis_kelamin }}</td>
                <td>{{ $santri->nama_ortu }}</td>
                <td>{{ $santri->alamat }}</td>
                <td>{{ $santri->no_hp }}</td>
                <td>{{ $santri->program }}</td>
                <td>{{ $santri->username }}</td>
                <td>{{ $santri->password }}</td>

                <td class="text-center">

                        <a href="{{ url('/viewsantri/'.$santri->id) }}">
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
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Nama Ortu</th>
                    <th>Alamat</th>
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
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
