<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Студенческий городок</title>
    <!-- Bootstrap Core CSS -->
    <link href="../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper - style you can find in pages.scss -->
<section id="wrapper">
    <div class="login-register" style="background-image:url(../images/background/fat.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material"  method="POST" action="{{ route('login') }}">
                    @csrf
                    <h4>Авторизация</h4>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input id="email" placeholder="Введите почту" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="password" placeholder="Введите пароль" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox"  name="remember"  {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox-signup"> Запомнить меня </label>
                                </div>
                            </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Забыл пароль?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                    type="submit">Вход</button>
                        </div>
                    </div>
                </form>

                {{--<div class="card-body">--}}
                {{--@if (session('status'))--}}
                    {{--<div class="alert alert-success">--}}
                        {{--{{ session('status') }}--}}
                    {{--</div>--}}
                {{--@endif--}}

                {{--<form class="form-horizontal" id="recoverform" method="POST" action="{{ route('password.email') }}">--}}
                    {{--@csrf--}}

                    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<h3>Восстановление пароля</h3>--}}
                            {{--<p class="text-muted">Введите свой адрес электронной почты, и инструкции будут отправлены! </p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group text-center m-t-20">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Сброс--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
                </div>
            </div>
    {{--</div>--}}

</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../plugins/bootstrap/js/popper.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="../plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>