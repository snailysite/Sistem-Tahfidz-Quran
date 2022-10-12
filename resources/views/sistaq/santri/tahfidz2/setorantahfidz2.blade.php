@extends('master.setoran')

@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Setoran Santri Tahfidz 2</h1>

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Data Setoran Santri Tahfidz 2</a></li>
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
          <h3 class="card-title">Data setoran hafalan santri program tahfidz 2 ponpes sunan pandanaran</h3>
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
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Point</th>
                <th>Juz </th>
                <th>Surah</th>
                <th>Ayat</th>
            </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach ($santri as $santri)


                <tr>
                <td>{{ $no }}</td>
                <td>{{ $santri->tanggal }}</td>
                <td>{{ $santri->nama_santri }}</td>
                <td>{{ $santri->point }}</td>
                <td>{{ $santri->juz }}</td>
                <td>{{ $santri->surah }}</td>
                <td>{{ $santri->ayat }}</td>


                <td class="text-center">
                        <a href="">
                            <span class="btn btn-success" style="font-size: 10px;" title="edit">
                            <i class="fas fa-pen"></i></span>
                        <a href="">
                            <span class="btn btn-warning" style="font-size: 10px;" title="lihat">
                            <i class="fas fa-eye"></i></span>
                        <a href="">
                            <span class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?!!')" style="font-size: 10px;" title="hapus">
                            <i class="fas fa-trash"></i></span>
                            @csrf
                </td>
                </tr>
                <?php $no++ ;?>
                @endforeach
                </tbody>
                <tfoot class="text-center">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Point</th>
                    <th>Juz </th>
                    <th>Surah</th>
                    <th>Ayat</th>
                </tr>
            </tfoot>
          </table>
        </div>
    </div>
        <!-- /.card-body -
</section>
<!-- /.content -->

@endsection
