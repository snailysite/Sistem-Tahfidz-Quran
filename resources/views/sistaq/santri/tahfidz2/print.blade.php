@extends('master.layouts1')

@section('content')

<div class="container">
    <a href="/santritahfidz2">
      <button type="submit" class="btn btn-danger" style="margin-bottom: 20px;">Kembali</button>
      </a>
  </div>
<section class="content">
    <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 p-4 mb-4 text-white rounded bg-dark text-center">
                    {{ csrf_field() }}
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset('admin/dist/img/avatar5.png') }}"
                        alt="User profile picture">
                    </div>
                        {{--  <img src="{{ asset('storage/app/post-image'. $santri->foto) }}" alt="">  --}}
                        <br>
                        <h1><strong>{{ $santri->nama_santri }}</strong></h1>
                        <br>
                        <p>{!! QrCode::size(300)->generate($santri->nisn); !!}</p>
                        <p class="lead my-3">{{ $santri->program }}</p>
                        <!-- /.card-body -->
                </div>
            </div>

      </div>
    </div>
</section>
@endsection


