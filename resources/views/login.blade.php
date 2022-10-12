<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset ('admin/plugins') }}/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{asset ('admin/plugins') }}/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{asset ('admin/dist') }}/css/adminlte.min.css?v=3.2.0">

</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img left src="{{ asset('/') }}/sistaq.png" width="200" heigth="200" title="System Tahfidz Qur'an">
              <h1><b>System Tahfidz Quran</b></h1>

                Pondok Pesantren Sunan
                Pandanaran
            </div>
            <div class="card-body">


                <form action="/postlogin" method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="name" class="form-control" placeholder="name" name="name"
                            required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" required placeholder="Password"
                            id="password" autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                {{--  <p>Belum punya akun?<a href="/register"> REGISTER</a></p>  --}}

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                {{--  @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif  --}}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <script src="{{asset ('admin/plugins') }}/jquery/jquery.min.js"></script>

    <script src="{{asset ('admin/plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src=".{{asset ('admin/dist') }}/js/adminlte.min.js?v=3.2.0"></script>

</body>
</html>
