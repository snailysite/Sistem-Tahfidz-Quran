<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SELAMAT DATANG DI SISTAQ</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
</head>
<body>
    <style>
        body{

            background: white;
        }
        .card{
            box-sizing: border-box;

            position: absolute;
            width: 1313px;
            height: 800px;
            left: 63px;
            top: 52px;

            background: radial-gradient(78.94% 185.73% at 95.24% 65.65%, rgba(169, 149, 42, 0.2) 0%, rgba(0, 0, 0, 0) 100%), radial-gradient(140.65% 140.65% at 15.65% 18.69%, rgba(134, 62, 213, 0.2) 0%, rgba(0, 0, 0, 0) 100%);
            border-radius: 50px;
            {{--  border: 3px solid;  --}}

            {{--  border-image-source: linear-gradient(303.19deg, #567731 7.69%, rgba(86, 119, 49, 0) 74.99%),
            linear-gradient(133.79deg, #A9952A -3.19%, rgba(169, 149, 42, 0) 74.47%);  --}}


        }
        .navbar-brand{
            position: absolute;
            width: 149px;
            height: 40px;
            {{--  left: 213px;
            top: 106px;  --}}
        }
        .nav-link{

            margin-top: 50px;
            justify-content: center;
            font-family: 'Josefin Sans',sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 16px;
            /* identical to box height */


            color: black;

        }
        .button{
            box-sizing: border-box;

            position: absolute;
            width: 124px;
            height: 43px;
            left: 1000px;
            color: black;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));

            margin-top: 50px;
            border-radius: 20px;
            background:none;

            border: 2px solid #567731;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);;
        }
        h1{
            position: absolute;
            width: 454px;
            height: 128px;
            margin-top: 250px;

            font-family: 'Josefin Sans',sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 64px;
            {{--  line-height: 64px;  --}}

            color: black;
        }
        h3{
            position: absolute;
            width: 561px;
            height: 32px;
            margin-top: 450px;

            font-family: 'Josefin Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            line-height: 32px;
            /* identical to box height */


            color: black;
        }
        hr{
            position: absolute;
            width: 626px;
            height: 0px;
            margin-top: 550px;

            border: 2px solid #A9952A;
        }
        .gambar{
            position: absolute;
            height: 338px;
            width: 552px;
            margin-top: 200px;
            border-radius: 0px;

        }
        .lokasi{
            position: absolute;
            width: 24px;
            height: 24px;
            margin-top: 580px;
        }
        p{
            position: absolute;
            width: 590px;
            height: 12px;
            margin-left: 43px;
            margin-top: 590px;

            font-family: 'Josefin Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 12px;
            /* identical to box height */


            color: black;

        }

    </style>

    {{--  content  --}}

    <div class="card">
        <div class="container">
                <nav>
                    <a class="navbar-brand" href="/"><img src="{{ asset('sistaq.png') }}" alt=""></a>
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Contact</a>
                        </li>
                        <a href="/login">
                            <button class="button" type="submit">login</button>
                        </a>
                    </ul>
                </nav>
                {{--  nav end  --}}

                <div class="row">
                    <div class="col">
                        <h1>Sistem Tahfidz Quran</h1>
                        <h3>Pondok Pesantren Sunan Pandanaran</h3>
                        <hr>
                        <span><img class="lokasi" src="{{ asset('Location.png') }}" alt=""></i></span>
                        <p>Jl. Nglanjaran, Candirejo, Sandonoharjo, Kec. Ngaglik, Kab. Sleman, Daerah Istimewa Yogyakarta 55581</p>
                    </div>
                    <div class="col">
                        <img class="gambar" src="{{ asset('Quran.png') }}" alt="">
                    </div>
                </div>
        </div>
    </div>
</body>
<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{--  <script src="{{ asset('admin/dist/js/demo.js') }}"></script>  --}}
</body>
</html>
