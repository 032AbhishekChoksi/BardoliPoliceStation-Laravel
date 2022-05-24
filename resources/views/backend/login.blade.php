<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ url('backend/apple-icon.png') }}">
    <link rel="shortcut icon" href="{{ url('backend/favicon.ico') }}">

    <link rel="stylesheet" href="{{ url('backend/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ url('backend/assets/scss/style.css') }}">
    <link href="{{ url('backend/assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="login-logo">
                                <img alt="Gujarat Police Logo" class="rounded" src="{{ url('backend/images/logo/GP2.png') }}" style="height: 60%;width: 60%;">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="login-logo">
                                <h1 class="align-content">Bardoli Police</h1>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('admin.login')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="adminname" class="form-control" placeholder="User Name" required>
                            @if ($errors->has('adminname'))
                             <span class="text-danger">The User Name field is required.</span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="adminpassword" class="form-control" placeholder="Password" required>
                            @if ($errors->has('adminpassword'))
                                <span class="text-danger">The Password field is required.</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('backend/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{url('backend/assets/js/popper.min.js')}}"></script>
    <script src="{{url('backend/assets/js/plugins.js')}}"></script>
    <script src="{{url('backend/assets/js/main.js')}}"></script>

</body>

</html>
