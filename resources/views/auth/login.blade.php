<x-master>
    <!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				{{-- <li><a title="Home" href="index.html">Trang chủ</a></li>
				<li class="active">Đăng nhập</li> --}}
			</ol>
			<div class="return-home-link pull-right">
				{{-- <a title="Return to home page" href="index.html">Về trang chủ</a> --}}
			</div>
		</div>
		<div class="page-header bottom-shadow">
			{{-- <h3>Đăng nhập</h3> --}}
			
		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<div class="page-wizard">
		<!-- container -->
		<div class="container">
			<!-- <ul class="bottom-shadow">
				<li class="active"><a href="07_login_register.html">1# login</a></li>
				<li><a title="login" href="08_Shipping_Address.html">2# Shipping Address</a></li>
				<li><a title="Shipping Address" href="09_payment.html">3# Payments</a></li>
				<li><a title="summary" href="10_summary.html">4# summary</a></li>
				<li><a title="Finish" href="11_finish.html">5# Finish</a></li>
			</ul> -->
			<!-- contact-form-details -->
			<div class="contact-form-details row">
				<!-- col-md-6 -->
				<div class="col-md-6 col-sm-6">
					<div class="section-header">
						<h3>Đăng nhập</h3>
					</div><!-- Section Header Over -->
					<div class="contact-form bottom-shadow">
                        <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
                            @csrf
							<div class="form-group">
								<label class="col-md-4">Email</label>
								<div class="col-md-8">
									<input type="email" class="form-control" id="txt_email" placeholder="nhập email" required name="email"/>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-4">Mật khẩu</label>
								<div class="col-md-8">
									<input type="password" class="form-control" id="password" placeholder="*****" required name="password"/>
								</div>
							</div>
							<div class="drop-line bottom-shadow"></div>
							<div class="form-group">
								<a title=">Forgot Password " href="#">Quên mật khẩu?</a>	
								<button type="submit" value="Đăng nhập" class="btn btn-default  pull-right">Đăng Nhập</button>
							</div>
						</form>
					</div>
				</div><!-- col-md-6 /- -->
				<!-- col-md-6 -->
				<div class="col-md-6 col-sm-6"> 
					<div class="section-header">
						<h3>Bạn chưa có tài khoản ?</h3>
					</div>
					<div class="contact-details new-user-register register-user bottom-shadow"> 
						<h3>Hãy tạo một tài khoản để tìm hiểu thêm</h3>
						<p>Nhấn vào nút "tạo tài khoản" để tiếp tục </p>
						<div class="drop-line bottom-shadow"></div>
						<a title="Continue" href="{{route('register')}}" class="btn btn-next btn-fill btn-warning btn-wd btn-sm">Tạo tài khoản</a>
					</div>
				</div>
				<!-- col-md-6 /- -->
			</div><!-- Contact Form details /- -->
		</div>
	</div>
		
</x-master>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body >
{{-- <div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/home') }}"><b>Clothshop Admin</b></a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Đăng nhập bằng tài khoản admin</p>

        <form method="post" action="{{ url('/login') }}">
            @csrf

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Nhớ tài khoản
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{ url('/password/reset') }}">Quên mật khẩu</a><br>
        <a href="{{ url('/register') }}" class="text-center">Tạo tài khoản</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box --> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
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
