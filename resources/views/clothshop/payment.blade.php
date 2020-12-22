<x-master>
    <!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				{{-- <li><a title="Home" href="index.html">Tran chủ</a></li>
				<li class="active">Thanh toán</li> --}}
			</ol>
			<div class="return-home-link pull-right">
				{{-- <a title="Return Home Page" href="index.html">Trở lại trang chủ</a> --}}
			</div>
		</div>
		<div class="page-header bottom-shadow">
			<h3>Chọn hình thức giao hàng & thanh toán</h3>
			
		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<div class="page-wizard">
		<!-- container -->
		<div class="container">
			{{-- <ul class="bottom-shadow">
				<li class="active"><a title="Login" href="07_login_register.html">1# login</a></li>
				<li class="active"><a title="Shipping Address" href="08_Shipping_Address.html">2# Shipping Address</a></li>
				<li class="active"><a title="Payments" href="09_payment.html">3# Payments</a></li>
				<li><a title="summary" href="10_summary.html">4# summary</a></li>
				<li><a title="Finish" href="11_finish.html">5# Finish</a></li>
			</ul> --}}
			<!-- contact-form-details -->
			<div class="contact-form-details payment-getway-option">
				<div class="row">
					<div class="col-md-6 col-sm-6"><!-- User Form -->
						<div class="section-header">
							<h3>Chọn hình thức giao hàng</h3>
						</div><!-- Section Header /- -->
						<div class="contact-form bottom-shadow">
							<form>
								<div class="radio">
									<input type="radio" name="r" id="r1"><label for="r1">Nhận trực tiếp tại shop</label>
								</div>
								
								<div class="radio">
									<input type="radio" name="r" id="r3"><label for="r3">Giao hàng online</label>
								</div>
							</form>
						</div>											
					</div><!-- User Form /- -->
						
					<div class="col-md-6 col-sm-6"> 
						<!-- Section Header -->
						<div class="section-header">
							<h3>Chọn hình thức thanh toán</h3>
						</div><!-- Section Header /- -->
						<div class="contact-form bottom-shadow">
							<form>
								<div class="radio">
									<input type="radio" name="r" id="radio1"><label for="radio1">Thanh toán khi nhận hàng</label> 
								</div>
								<div class="radio">
									<input type="radio" name="r" id="radio2"><label for="radio2">Thanh toán bắng thẻ</label>
								</div>
								<div class="radio">
									<input type="radio" name="r" id="radio3"><label for="radio3">Paypal</label>
								</div>
								<div class="radio">
									<input type="radio" name="r" id="radio4"><label for="radio4">Chuyển khoản ngân hàng</label>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- Contact Form Details /- -->
			<div class="wizard-footer">
				<a title="Back" href="08_Shipping_Address.html" class="btn btn-next btn-fill btn-warning btn-wd btn-sm">Trở lại</a>
				<a title="Continue" href="10_summary.html" class="btn btn-next btn-fill btn-warning btn-wd btn-sm">Tiếp theo</a>
			</div>
		</div>
	</div>
	
</x-master>