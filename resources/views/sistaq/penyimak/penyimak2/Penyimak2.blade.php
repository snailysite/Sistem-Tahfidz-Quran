@extends('master.penyimak')

@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Ustadz Penyimak Tahfidz 2</h1>

        {{--  import data excel  --}}
        <div class="col-auto">
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-success" style="margin-top: 20px;" data-toggle="modal" data-target="#contohModal">Import Data Excel</button>

            <!-- Modal -->
                <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" area-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                            {{--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  --}}
                        </div>

                        <form action="#" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="modal-body">
                            <div class="form-group">
                              <input type="file" name="file" required>
                            </div>
                          </div>
                          <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                           {{--  <img src="/asset/sukses.png" width="" height="" alt="...">  --}}
                    </div>
                </div>
            </div>
        </div>
                    {{--  import excel end  --}}

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Data Ustadz Penyimak Tahfidz 2</a></li>
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
          <h3 class="card-title">Data ustadz penyimak program tahfidz 2 ponpes sunan pandanaran</h3>
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
              <th>Alamat</th>
              <th>No Hp</th>
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
                <td>{{ $penyimak->alamat }}</td>
                <td>{{ $penyimak->no_hp }}</td>
                <td>{{ $penyimak->username }}</td>
                <td>{{ $penyimak->password }}</td>
                <td class="text-center">

                        <a href="{{url('/editpenyimak2/'.$penyimak->id)}}">
                            <span class="btn btn-success" style="font-size: 10px;" title="edit">
                            <i class="fas fa-pen"></i></span>
                        <a href="">
                            <span class="btn btn-warning" style="font-size: 10px;" title="lihat">
                            <i class="fas fa-eye"></i></span>
                        <a href="{{url('/deletepenyimak2/'.$penyimak->id)}}">
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
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
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
