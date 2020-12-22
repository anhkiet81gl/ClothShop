<x-master>
    @if(Auth::check())

        <div class="container">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    {{-- <li><a title="Home" href="#">Trang chủ</a></li>
                    <li class="active">Địa chỉ giao hàng</li> --}}
                </ol>
                <div class="return-home-link pull-right">
                    {{-- <a title="Return Home page" href="index.html">Trở lại trang chủ</a> --}}
                </div>
            </div>

        </div><!-- container /- -->
        <!-- Page Breadcrumb /- -->
        <form action="{{route('checkout')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="page-wizard">
                <!-- container -->
                <div class="container">

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

                                            <td class="blank-space"></td>

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
{{--                                    <tr class="shipping">--}}
{{--                                        <th>Tiền ship</th>--}}
{{--                                        <td><span class="amount">25.000vnd</span></td>--}}
{{--                                    </tr>--}}
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

    @else
        <div class="container">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    {{-- <li><a title="Home" href="#">Trang chủ</a></li>
                    <li class="active">Địa chỉ giao hàng</li> --}}
                </ol>
                <div class="return-home-link pull-right">
                    {{-- <a title="Return Home page" href="index.html">Trở lại trang chủ</a> --}}
                </div>
            </div>

        </div><!-- container /- -->
        <!-- Page Breadcrumb /- -->
        <form action="{{route('checkout')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="page-wizard">
                <!-- container -->
                <div class="container">

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

                                            <td class="blank-space"></td>

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
    @endif
</x-master>
