<x-master>
    <!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				<li><a title="Home" href="#">Trang chủ</a></li>
				<li class="active">Địa chỉ giao hàng</li>
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return Home page" href="index.html">Trở lại trang chủ</a>
			</div>
		</div>
		<div class="page-header bottom-shadow">
			<h3>Địa chỉ giao hàng</h3>
			{{-- <p>with Billing Address</p> --}}
		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<div class="page-wizard">
		<!-- container -->
		<div class="container">
			{{-- <ul class="bottom-shadow">
				<li class="active"><a title="login" href="07_login_register.html">1# login</a></li>
				<li class="active"><a title="Shipping Address" href="08_Shipping_Address.html">2# Shipping Address</a></li>
				<li><a title="Payments" href="09_payment.html">3# Payments</a></li>
				<li><a title="summary" href="10_summary.html">4# summary</a></li>
				<li><a title="Finish" href="11_finish.html">5# Finish</a></li>
			</ul> --}}
			<!-- contact-form-details -->
			<div class="contact-form-details shipping-transports row">	
				<div class="col-md-12 col-sm-6 ">
					<div class="section-header">
						{{-- <h3>Chọn hình thức giao hang</h3> --}}
					</div><!-- Section Header /- -->
					<div class="contact-form bottom-shadow">
						<form class="form-horizontal">
							
							<div class="form-group">
								<label data-for="name" class="col-md-2" >Tên</label>
								<div class="col-md-10">
									<input type="text" class="form-control"  id="firstname" placeholder="nhập tên">
								</div>
							</div>
							 <div class="form-group">
								<label data-for="lastname" class="col-md-2">Họ và tên lót</label>
								<div class="col-md-10">
									<input type="text" class="form-control" id="lastname" placeholder="nhập họ, tên lót" required />
								</div>
							</div>
							<div class="form-group">
								<label data-for="address1" class="col-md-2">Địa chỉ</label>
								<div class="col-md-10">
									<input type="text" class="form-control" id="address1" placeholder="nhập địa chỉ" required />
								</div>
							</div>
							<div class="form-group">
								<label data-for="address1" class="col-md-2">Số điện thoại</label>
								<div class="col-md-10">
									<input type="text" class="form-control" id="address1" placeholder="nhập số điện thoại" required />
								</div>
							</div>
							{{-- <div class="form-group">
								<label data-for="address2" class="col-md-4">Address #2</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="address2" placeholder="Address Here" required />
								</div>
							</div> --}}
							<div class="form-group">
								<label data-for="city" class="col-md-2">Thành phố</label>
								<div class="col-md-10">
									<input type="text" class="form-control" id="city" placeholder="" required />
								</div>
							</div>
							<div class="form-group">
								<label data-for="zip" class="col-md-2">Mã Zip</label>
								<div class="col-md-10">
									<input type="text" class="form-control" id="zip" placeholder="nhập mã zip" required />
								</div>
							</div>
							<div class="form-group">
								<label data-for="country" class="col-md-2">Quốc gia</label>
								<div class="col-md-10">
									<select class="minimal">
										<option value="selected">SELECT YOUR COUNTRY</option>									
										<option value="HCM">Hồ Chí Minh</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label data-for="email" class="col-md-2">Email</label>
								<div class="col-md-10">
									<input type="email" class="form-control" id="txt_email" placeholder="nhập email" required />
								</div>
							</div>
							<div class="form-group">
								<label data-for="confirm email" class="col-md-2">Xác nhận mail</label>
								<div class="col-md-10">
									<input type="email" class="form-control" id="cemail" placeholder="nhập mã xác nhận" required />
								</div>
							</div>
						</form>
					</div>
				</div>
				
				
			</div><!-- Contact Form Details /- -->
			<div class="wizard-footer">
				<a title="Back" href="07_login_register.html" class="btn btn-next btn-fill btn-warning btn-wd btn-sm">Trở lại</a>
				<a title="Continue" href="09_payment.html" class="btn btn-next btn-fill btn-warning btn-wd btn-sm">Tiếp tục</a>
			</div>
		</div>
	</div>
	
</x-master>