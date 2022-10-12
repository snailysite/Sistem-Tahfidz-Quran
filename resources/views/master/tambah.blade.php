<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTAQ|TAMBAH DATA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        @csrf
        <a href="/login">
        <button type="submit" class="dropdown-item">
            <i class="fas fa-user mr-2"></i>Log Out
            {{--  <span class="float-right text-muted text-sm">log out from Admin?</span>  --}}
        </button>
        </a>      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-6">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('sistaq.png') }}" alt="SISTAQ Logo" class="brand-image img-circle elevation-6">
      <span class="brand-text font-weight-dark"><strong> SISTAQ</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('admin/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Santri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/santritahfidz1" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/santritahfidz2" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/santritahfidz3" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 3</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                Data Penyimak
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/penyimak1" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penyimak Tahfidz 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/penyimak2" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penyimak Tahfidz 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/penyimak3" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penyimak Tahfidz 3</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Data Presensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/presensitahfidz1" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/presensitahfidz2" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/presensitahfidz3" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 3</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Tahfidz
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/setorantahfidz1" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/setorantahfidz2" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/setorantahfidz3" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 3</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Tambah Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/tambahsantri" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Santri</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tambahpenyimak" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Penyimak</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-header">PENYIMAK</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Presensi Santri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/absensitahfidz1" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/absensitahfidz2" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/absensitahfidz3" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri Tahfidz 3</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Tahfidz
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/tahfidz1" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tahfidz 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tahfidz2" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tahfidz 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/tahfidz3" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tahfidz 3</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-header">WALI SANTRI</li>
          <li class="nav-item">
            <a href="/laporan" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Raport Santri
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer text-center">
    {{--  <div class="float-right d-none d-sm-block">  --}}
      {{--  <b>Version</b> 3.2.0  --}}
    {{--  </div>  --}}
    <strong>Copyright 2022<a href="/"> Sistem Tahfidz Quran</a>.</strong> Ponpes Sunan Pandanaran.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{--  <script src="{{ asset('admin/dist/js/demo.js') }}"></script>  --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
