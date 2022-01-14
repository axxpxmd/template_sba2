<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title --> 
    <link rel="icon" href="" type="image/x-icon">
    <title>{{ config('app.name') }} | Form Login</title>

    <!-- CSS -->
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet">

    <!-- Font -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
   
</head>
<body class="bg-gradient-success">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-3">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                            </div>
                            <hr>
                            <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control fs-14 @if ($errors->has('email')) is-invalid @endif" placeholder="E-Mail" autocomplete="off" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                    <div class="text-danger mt-2 fs-12" role="alert">
                                        <strong>Identitas tersebut tidak cocok dengan data kami.</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control fs-14 @if ($errors->has('password')) is-invalid @endif" placeholder="Password" autocomplete="off" required>
                                </div>
                                <button class="btn btn-success btn-block fs-14">Login<i class="fa fa-arrow-right ml-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
</html>
