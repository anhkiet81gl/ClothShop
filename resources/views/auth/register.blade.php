<x-master>
    <!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				{{-- <li><a title="Home" href="index.html">Trang chủ</a></li>
				<li class="active">Tạo tài khoản</li> --}}
			</ol>
			<div class="return-home-link pull-right">
				{{-- <a title="Return to home page" href="index.html">Về trang chủ</a> --}}
			</div>
		</div>
		<div class="page-header bottom-shadow">
			{{-- <h3>Tạo tài khoản</h3> --}}
			<!-- <p>It’s free and always will be.</p> -->
		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<!-- contact-form-details -->
	<div class="contact-form-details">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6"><!-- User Form -->
					<div class="section-header">
						<h3>Đăng kí</h3>
					</div><!-- Section Header /- -->
					<div class="contact-form">
                        <form class="form-horizontal" method="post" action="{{ url('/register') }}">
                            @csrf
							<div class="form-group">
								<label for="firstname" class="col-md-4" >Tên</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="firstname" placeholder="Ten " required name="name"/>
								</div>
							</div>
							 <div class="form-group">
								<label for="lastname" class="col-md-4">Email</label>
								<div class="col-md-8">
									<input type="email" class="form-control" id="lastname" placeholder="Email" required name="email"/>
								</div>
							</div>
							<div class="form-group">
								<label  class="col-md-4">Mật khẩu</label>
								<div class="col-md-8">
									<input type="password" class="form-control" id="txt_email" placeholder="Mat khau" required name="password"/>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-4">Nhập lại mật khẩu</label>
								<div class="col-md-8">
									<input type="password" class="form-control" id="password" placeholder="Nhap lai mat khau" required name="password_confirmation"/>
								</div>
							</div>
							<div class="drop-line bottom-shadow"></div>
							 <div class="form-group">
								<!-- <a title="Or Return to Shop" href="#">Or Return to Shop</a>	 -->
								<button type="submit" value="Tạo tài khoản" class="btn btn-default  pull-right">Tạo tài khoản</button>
							</div>
						</form>
					</div>
				</div><!-- User Form /- -->
				
				<div class="col-md-6 col-sm-6"> 
					<!-- Section Header -->
					<div class="section-header">
						<h3>Bạn đã có tài khoản ?</h3>
					</div><!-- Section Header /- -->
					<div class="contact-details register-user"> 
						<div class="register-user-banner">
							<!-- <img src="images/register/register-user.html" alt="register-user"> -->
							<!-- <h2>100% Satisfied Customers </h2> -->
						</div>						
						<h3>Nếu bạn đã có tài Khoản thì hãy đăng nhập để tham quan shop</h3>
						<p>Nhấp vào nút "đăng nhập" phía dưới</p>
						<div class="drop-line bottom-shadow"></div>
                        <a title="sign in" href="{{route('login')}}" class="btn btn-default">Đăng nhập</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Contact Form Details /- -->
	
</x-master>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Registration Page</title>

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
<body class="hold-transition ">
{{-- <div class="register-box">
    <div class="register-logo">
        <a href="{{ url('/home') }}"><b>ClothShop Register</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Tạo tài khoản admin</p>

        <form method="post" action="{{ url('/register') }}">
            @csrf

            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Họ tên">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Tôi đồng ý với <a href="#">điều khoản</a>
                        </label>
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Tạo</button>
                </div>
                
            </div>
        </form>

        <a href="{{ url('/login') }}" class="text-center">Đã có tài khoản</a>
    </div>
    
</div> --}}


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
