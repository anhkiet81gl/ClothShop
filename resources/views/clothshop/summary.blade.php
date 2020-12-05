<x-master>
    <!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				<li><a title="Home" href="#">Trang chủ</a></li>
				<li class="active">Xác nhận thông tin</li>
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return Home Page " href="index.html">Trở về trang chủ</a>
			</div>
		</div>
		<div class="page-header bottom-shadow">
			<h3>Xác nhận thông tin thanh toán</h3>
			
		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<div class="page-wizard">
		<!-- container -->
		<div class="container">
			{{-- <ul class="bottom-shadow">
				<li title="login" class="active"><a href="07_login_register.html">1# login</a></li>
				<li title="Shipping Address" class="active"><a href="08_Shipping_Address.html">2# Shipping Address</a></li>
				<li title="Payments" class="active"><a href="09_payment.html">3# Payments</a></li>
				<li title="summary" class="active"><a href="10_summary.html">4# summary</a></li>
				<li><a title="Finish" href="11_finish.html">5# Finish</a></li>
			</ul> --}}
			<!-- contact-form-details -->
			<div class="contact-form-details">					
				<div class="section-header">
					<h3>Lưu Ý</h3>
				</div>
				<div class="contact-form order-summart-text bottom-shadow">
					<h2>Đây là những thông tin bạn đã điền</h2>
					<h2>Hãy kiểm tra kĩ trước khi xác nhận đơn hàng</h2>
				</div>
			</div><!-- Contact Form Details /- -->

			<div class="shopping-information">				
				<div class="row">
					<div class="col-md-4 col-sm-4 bottom-shadow">
						<div class="billing-information">
							<h2>Thông tin hóa đơn</h2>
							<p>đây sẽ hiển thị thông tin hóa đơn</p>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-4 bottom-shadow">
						<div class="billing-information">
							<h2>Địa chỉ giao hàng</h2>
							<p>đây sẽ hiển thị địa chỉ giao hàng từ form nhập địa chỉ giao hàng</p>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-4 bottom-shadow">
						<div class="billing-information">
							<h2>Thanh toán và giao dịch</h2>
							<p>Thanh toán <Span>đây sẽ hiển thị hình thức thanh toán</span></p>
							<p>Giao dịch <span>đây sẽ hiển thị hình thức giao dịch</span></p>
							<p>hình thức sẽ được lấy từ form Giao dịch và thanh toán</p>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Comment-area -->
			<div class="comment-area bottom-shadow">
				<form>
					<textarea class="form-control" id="comment" rows="7" placeholder="Nếu bạn yêu cầu gì thêm, hãy điền vào đây"></textarea>
				</form>
			</div><!-- comment-area /- -->

			<!-- Shopping-cart-table -->
			<div class="shopping-cart-table bottom-shadow">
				<table class="shop_table cart">
					<thead>
						<tr>
							<th class="product-name">Sản phẩm</th>
							<th class="product-description">Thông tin</th>
							<th class="product-brand">Hãng</th>
							<th class="product-color">Màu sắc</th>							
							<th class="product-size">Kích thích</th>
							<th class="blank-space"></th>
							<th class="product-quantity">Số lượng</th>
							<th class="product-price">Giá</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="#"><img src="images/summary/summary-1.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Groom Style</b>
									Order No. 10101987 - 26
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci-icon" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color1"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size">xs</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>						
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a href="#"><img src="images/summary/summary-2.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Sed ligula magna facilisis.</b>
									Order No. 10101988 - 25
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci-icon" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size">L</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>						
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="#"><img src="images/summary/summary-3.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Vehicula vitae magna.</b>
									Order No. 10101989 - 24
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci-icon" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color1"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size color3">M</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>						
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a href="#"><img src="images/summary/summary-4.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Commodo a ipsum non.</b>
									Order No. 10101990 - 23
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci-icon" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size">S</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>						
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a href="#"><img src="images/summary/summary-5.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Vivamus placerat convis.</b>
									Order No. 10101991 - 22
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci-icon" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color2"></span>
							</td>							
							<td data-title="Size" class="product-size">
								
							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>						
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="product-content col-md-8">
					<h3 class="block-title">Vivamus placerat convis.</h3>
					<p>Vivamus maximus dictum ex, eget finibus sapien. Nam dictum risus sed fringilla imperdiet. Fusce sem sem, eleifend in nulla nec, tincidunt accumsan eros. Aliquam aliquet rhoncus nibh, ac pellentesque urna semper quis. Suspendisse eget enim venenatis, vulputate quam nec, porttitor lorem.</p>
				</div>
				<div class="product-total-price col-md-4">
					<table>
						<tbody>
							<tr class="cart-subtotal">
								<th>Tổng</th>
								<td><span class="amount">&dollar;99.95</span></td>
							</tr>
							<tr class="shipping">
								<th>Tiền ship</th>
								<td><span class="amount">&dollar;00.00</span></td>
							</tr>
							<tr class="order-total">
								<th>Tổng cộng</th>
								<td><strong><span class="amount">&dollar;99.95</span></strong> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		
			<div class="wizard-footer">
				<a title="Back" href="09_payment.html" class="btn btn-next btn-fill btn-warning btn-wd btn-sm">Trở lại</a>
				<a title="Continue" href="11_finish.html" class="btn btn-next btn-fill btn-warning btn-wd btn-sm">Tiếp tục</a>
			</div>
		</div>
	</div>
	
</x-master>