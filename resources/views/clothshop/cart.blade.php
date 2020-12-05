<x-master>

<!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				{{-- <li><a title="Home" href="#">Trang chủ</a></li>
				<li class="active">Địa chỉ giao hàng</li> --}}
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return Home page" href="index.html">Trở lại trang chủ</a>
			</div>
		</div>

        {{-- <p>with Billing Address</p> --}}
        <!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
    <form action="{{route('checkout')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
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
			<div class=" shipping-transports row">
				<div class="col-md-12 col-sm-12 ">
					<div class="section-header">
						 <h3>Đặt hàng</h3> 
                    </div>
                    <!-- Section Header /- -->
                    
					<div class="contact-form form-horizontal" >
						

							<div class="form-group">
								<label data-for="name" class="col-md-2" >Họ tên</label>
								<div class="col-md-10">
									<input type="text" class="form-control"  id="firstname" placeholder="nhập tên" name="name">
								</div>
                            </div>
                            <div class="form-group">
								<label data-for="gender" class="col-md-2" >Giới tính</label>
								<div class="col-md-10">
									<div class="radio ">
                                        <input type="radio" value="nam" id="gender-nam" name="gender"><label for="gender-nam">Nam</label>
                                    </div>
                                    
                                    <div class="radio ">
                                        <input type="radio" value="nu" id="gender-nu" name="gender"><label for="gender-nu">Nữ</label>
                                    </div>
								</div>
							</div>
							<div class="form-group">
								<label data-for="address1" class="col-md-2">Địa chỉ</label>
								<div class="col-md-10">
									<input type="text" class="form-control" id="address1" placeholder="nhập địa chỉ" required name="address"/>
								</div>
							</div>
							<div class="form-group">
								<label data-for="address1" class="col-md-2">Số điện thoại</label>
								<div class="col-md-10">
									<input type="text" class="form-control" id="address1" placeholder="nhập số điện thoại" required name="phone_number"/>
								</div>
							</div>
							
							<div class="form-group">
								<label data-for="email" class="col-md-2">Email</label>
								<div class="col-md-10">
									<input type="email" class="form-control" id="txt_email" placeholder="nhập email" required name="email"/>
								</div>
                            </div>
                            <div class="form-group">
								<label data-for="lastname" class="col-md-2">Ghi chú</label>
								<div class="col-md-10">
									<textarea id="note" name="note"  class="form-control" name="note"></textarea>
								</div>
							</div>
						
                    </div>
                    
                </div>
                    <div class="section-header" >
                        <h3>Đơn hàng của bạn</h3> 
                    </div>
                    <!-- Shopping-cart-table -->
                <div class="shopping-cart-table bottom-shadow col-md-6 col-sm-6">
                    <table class="shop_table cart">
                        <thead>
                            <tr>
                                <th class="product-name">Sản phẩm</th>
                                <th class="product-description">Thông tin</th>
                                {{-- <th class="product-brand">Hãng</th>
                                <th class="product-color">Màu sắc</th>
                                <th class="product-size">Kích thích</th> --}}
                                <th class="blank-space"></th>
                                <th class="product-quantity">Số lượng</th>
                                <th class="product-price">Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                             {{-- @dd(Session::get('cart'))  --}}

                            @if(Session::get('cart'))

                               

                                @foreach($product_cart as $product)

                                    <tr>
                                        <td data-title="Product" class="product-tdumbnail">
                                            <a title="Summary" href="#"><img src="{{$product['item']['product_image']}}" alt="summary" width="20%" height="20%"/></a>
                                        </td>
                                        <td data-title="Description" class="product-description">
                                            <a title="Order No" href="#">
                                                <b>{{$product['item']['product_name']}}</b>
                                                {{$product['item']['description']}}
                                            </a>
                                        </td>
                                        {{-- <td data-title="brand" class="product-brand">
                                            <span><img src="images/summary/gucci-icon.png" alt="gucci-icon" /></span>
                                        </td>
                                        <td data-title="Color" class="product-color">
                                            <span class="choose-color color1"></span>
                                        </td>
                                        <td data-title="Size" class="product-size">
                                            <span class="choose-size">xs</span>
                                        </td> --}}
                                        <td class="blank-space"></td>
                                        {{-- <td data-title="Quantity" class="product-quantity">
                                            <div class="quantity">
                                                1
                                            </div>
                                        </td> --}}
                                        <td data-title="Price" class="product-price">
                                            <span class="amount">{{$product['item']['product-price']}}</span>
                                        </td>
                                        <td><a title="close" href="{{route('dellProductCart',$product['item']['id'])}}"><i class="fa fa-close">    </i></a></td>
                                    </tr>
                                @endforeach

                            @endif


                        </tbody>
                    </table>
                    <div class="product-content col-md-8">
                        
                            <div class="form-group">
                                <label data-for="name" class="col-md-4" >Phương thức vận chuyển</label>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <input type="radio" value="1" name="delivery" id="r1"><label for="r1">Giao hàng tiết kiệm</label>
                                    </div>
                                    
                                    <div class="radio">
                                        <input type="radio" value="2" name="delivery" id="r3"><label for="r3">Viettle post</label>
                                    </div>
                                </div>
                            </div>
                            
                        
                        
                        <div class="form-group">
                            <label data-for="name" class="col-md-4" >Hình thức thanh toán</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <input type="radio" value="COD" name="payment" id="r1"><label for="r1">Thanh toán khi nhận hàng</label>
                                </div>
                                
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="product-total-price col-md-4">
                        <table>
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Sản phẩm</th>
                                <td><span class="amount"> {{Session('cart')->totalQty}}</span></td>
                                </tr>
                                <tr class="shipping">
                                    <th>Tiền ship</th>
                                    <td><span class="amount">&dollar;00.00</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Tổng </th>
                                    <td><strong><span class="amount">@if(Session::has('cart')){{number_format(Session('cart')->totalPrice)}}@endif VND</span></strong> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

			</div><!-- Contact Form Details /- -->
			<div class="wizard-footer">
                <button type="submit" class="btn btn-next btn-fill btn-warning btn-wd btn-sm">Đặt hàng</button>
			</div>
		</div>
    </div>
    </form>
</x-master>






//code cua don hang

{{-- <form action="{{route('checkout')}}" method="post" class="beta-form-checkout">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
        <div class="col-sm-6">
            <h4>Đặt hàng</h4>
            <div class="space20">&nbsp;</div>

            <div class="form-block">
                <label for="name">Họ tên*</label>
                <input type="text" id="name" name="name" placeholder="Họ tên" required>
            </div>
            <div class="form-block">
                <label>Giới tính </label>
                <input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                <input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>

            </div>

            <div class="form-block">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required placeholder="expample@gmail.com">
            </div>

            <div class="form-block">
                <label for="adress">Địa chỉ*</label>
                <input type="text" id="adress" name="address" placeholder="Street Address" required>
            </div>


            <div class="form-block">
                <label for="phone">Điện thoại*</label>
                <input type="text" id="phone_number" name="phone_number" required>
            </div>

            <div class="form-block">
                <label for="note">Ghi chú</label>
                <textarea id="note" name="note"></textarea>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="your-order">
                <div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
                <div class="your-order-body" style="padding: 0px 10px">
                    <div class="your-order-item">
                        <div>
                            @if(Session::get('cart'))

                                @if(Session::get('cart'))
                                    {{Session('cart')->totalQty}}
                                @else
                                    Trống

                                @endif

                                @foreach($product_cart as $product)
                                    <div>
                                        {{$product['item']['product_name']}}
                                        {{$product['item']['price']}}
                                    </div>
                                @endforeach
                                {{route('checkout')}}
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="your-order-item">
                        <div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
                        <div class="pull-right"><h5 class="color-black">@if(Session::has('cart')){{number_format(Session('cart')->totalPrice)}}@endif VND</h5></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="your-order-head"><h5>Phương thức vận chuyển</h5></div>

                <div class="your-order-body">
                    <ul class="payment_methods methods">
                        <li class="payment_method_bacs">
                            <input id="payment_method_bacs" type="radio" class="input-radio" name="delivery" value="1" checked="checked" data-order_button_text="">
                            <label for="payment_method_bacs">Giao hàng tiết kiệm</label>

                        </li>

                        <li class="payment_method_cheque">
                            <input id="payment_method_cheque" type="radio" class="input-radio" name="delivery" value="2" data-order_button_text="">
                            <label for="payment_method_cheque">Viettel Post</label>

                        </li>

                    </ul>
                </div>
                <div class="your-order-head"><h5>Hình thức thanh toán</h5></div>

                <div class="your-order-body">
                    <ul class="payment_methods methods">
                        <li class="payment_method_bacs">
                            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="COD" checked="checked" data-order_button_text="">
                            <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                            <div class="payment_box payment_method_bacs" style="display: block;">
                                Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="text-center"><button type="submit" a class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></a></div>
            </div> <!-- .your-order -->
        </div>
    </div>
</form>
 --}}





{{--@if(Session::get('cart'))--}}

{{--    @if(Session::get('cart'))--}}
{{--        {{Session('cart')->totalQty}}--}}
{{--    @else--}}
{{--        Trống--}}

{{--    @endif--}}

{{--    @foreach($product_cart as $product)--}}
{{--        <div>--}}
{{--            {{$product['item']['product_name']}}--}}
{{--        </div>--}}
{{--    @endforeach--}}

{{--@endif--}}

