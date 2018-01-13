
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/_all-skins.min.css') }}" rel="stylesheet">
          <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Kalsel</b>trip</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register Admin</p>

    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}  has-feedback">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full name" required autofocus>
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback" >

              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email" required>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
      </div>


      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}  has-feedback">
              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
      </div>

      <div class="form-group  has-feedback">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <a href="/login" class="text-center">Sudah punya akun</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
