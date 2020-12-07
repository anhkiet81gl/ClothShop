<x-master>
    <!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				<li><a title="Home" href="{{route('trangchu')}}">Trang chủ</a></li>
				<li class="active">Tạo tài khoản</li>
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return to home page" href="index.html">Trở về trang chủ</a>
			</div>
		</div>
		<div class="page-header bottom-shadow">
			<h3>Tạo tài khoản</h3>
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
						<form class="form-horizontal">
							<div class="form-group">
								<label for="firstname" class="col-md-4" >Họ</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="firstname" placeholder="Tên họ" required />
								</div>
							</div>
							 <div class="form-group">
								<label for="lastname" class="col-md-4">Tên</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="lastname" placeholder="Tên lót và tên" required />
								</div>
							</div>
							<div class="form-group">
								<label  class="col-md-4">Email</label>
								<div class="col-md-8">
									<input type="email" class="form-control" id="txt_email" placeholder="email" required />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-4">Mật khẩu</label>
								<div class="col-md-8">
									<input type="password" class="form-control" id="password" placeholder="*****" required />
								</div>
							</div>
							<div class="drop-line bottom-shadow"></div>
							 <div class="form-group">
								<!-- <a title="Or Return to Shop" href="#">Or Return to Shop</a>	 -->
								<input type="submit" value="Tạo tài khoản" class="btn btn-default  pull-right">
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
						<a title="sign in" href="#" class="btn btn-default">Đăng nhập</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Contact Form Details /- -->
	
</x-master>