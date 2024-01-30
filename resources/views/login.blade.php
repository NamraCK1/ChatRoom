<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
</head>
<body>

    <!-- Horizontal Form -->
    {{-- <center> --}}
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <div class="card card-info col-5 mt-5">
            <div class="card-header">
                <h3 class="card-title">Login</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
                <form class="form-horizontal" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">UserName</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="UserName" 
                                @error('username')
                                style="border-color: red"
                                @enderror
                                >
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-12 col-form-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"
                                @error('password')
                                style="border-color: red"
                                @enderror
                                >
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <div class="form-check">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Sign in</button>
                        </div>
                    </div>
                </form>
                    <!-- /.card-body -->
                    <div class="card-footer d-flex align-items-right">
                        <a href="{{ url('register') }}">
                            <button class="btn btn-info ml-auto">Sign up</button>
                        </a>
                    </div>
                    <!-- /.card-footer -->
        </div>

</body>
</html>
