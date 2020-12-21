<header id="header" class="header">
    <!-- top-header -->
    <div class="top-header">
        <!-- container -->
        <div class="container">
            <ul class="top-social col-md-6 col-sm-4">
                <li><a title="Facebook" ></a></li>
                
            </ul>
            <div class="col-md-6 ow-right-padding col-sm-8">
                
                <ul class="top-menu">
                    <li><a title="Login" href="{{route('login')}}">Đăng nhập</a></li>
                    <li><a title="Register" href="{{route('register')}}">Đăng kí</a></li>
                </ul>
            </div>
        </div><!-- container /- -->
    </div><!-- top-header /- -->

    <!-- logo-search-block -->
    <div class="logo-search-block">
        <!-- container -->
        <div class="container">
            <div class="col-md-3 ow-left-padding col-sm-3 col-xs-3">
                <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
						</span>
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                </div><!-- /input-group -->
            </div>
            <div class="col-md-6 logo-block col-sm-6 col-xs-6">
                <a title="Logo" href="{{route('trangchu')}}">
                    <img src="">
                    Cloth Shop
                </a>
            </div>
            <div class="col-md-3 ow-right-padding col-sm-3 col-xs-3">
                <form class="col-md-8 col-sm-12 col-xs-12">
                    {{-- <div class="select-styled">
                        <select class="minimal">
                            <option>VND </option>
                            <option>Dollar (&#36;)</option>
                            <option>Lira (&#8356;)</option>
                            <option>Cent (&cent;)</option>
                            <option>Pound (&pound;)</option>
                            <option>Yen (&yen;)</option>
                        </select>
                    </div> --}}
                </form>
                <div class="col-md-4 col-sm-12 col-xs-12 cart-link ow-right-padding">
                    <svg width="16px" height="15px" viewBox="0 0 533.334 533.335">
                        <g>
                            <path d="M441.26,300.001c18.333,0,37.454-14.423,42.49-32.052l48.353-169.231c5.036-17.627-5.844-32.05-24.177-32.05H166.667   c0-36.819-29.848-66.667-66.667-66.667H0v66.667h100v283.333c0,27.614,22.386,50,50,50h316.667   c18.409,0,33.334-14.924,33.334-33.333s-14.925-33.334-33.334-33.334h-300v-33.333H441.26z M166.667,133.334h301.461l-28.573,100   H166.667V133.334z M200,491.668c0,22.916-18.75,41.666-41.667,41.666h-16.667c-22.917,0-41.667-18.75-41.667-41.666v-16.667   c0-22.917,18.75-41.667,41.667-41.667h16.667c22.917,0,41.667,18.75,41.667,41.667V491.668z M500,491.668   c0,22.916-18.75,41.666-41.667,41.666h-16.667c-22.916,0-41.666-18.75-41.666-41.666v-16.667c0-22.917,18.75-41.667,41.666-41.667   h16.667c22.917,0,41.667,18.75,41.667,41.667V491.668z"/>
                        </g>
                    </svg>
                    Giỏ hàng
                    <div class="cart-dropdown">
                        <table>



                            @if(Session::get('cart'))

                                @if(Session::get('cart'))
                                    {{Session('cart')->totalQty}}
                                @else
                                    Trống

                                @endif

                                @foreach($product_cart as $product)
                                    {{-- <div>
                                        {{$product['item']['product_name']}}
                                        {{$product['item']['price']}}
                                    </div> --}}
                                    <tr>
                                        <td class="product-thumb"><a href="#"><img width="150px" src="{{$product['item']['product_image']}}" alt="cart-hover" /></a></td>
                                        <td><a title="Red Cotton Top" href="#">{{$product['item']['product_name']}}</a></td>
                                        <td><a title="Red Cotton Top" href="#">{{$product['item']['price']}}</a></td>

                                        <td><a title="close" href="{{route('dellProductCart',$product['item']['id'])}}"><i class="fa fa-close">    </i></a></td>
                                    </tr>
                                @endforeach

                            @endif
                             {{-- <tr>
                                <td class="product-thumb"><a href="#"><img src="images/cart-hover-1.png" alt="cart-hover" /></a></td>
                                <td><a title="Red Cotton Top" href="#">Sản phẩm 1</a></td>


                                <td><a title="close" href="#"><i class="fa fa-close"></i></a></td>
                            </tr>  --}}
                        </table>
                        <div class="sub-total">

                            <p><span>Total</span>@if(Session::has('cart')){{number_format(Session('cart')->totalPrice)}}@endif VND</p>
                        </div>
                        <div class="cart-button">

                            <a title="Checkout" href=" {{route('checkout')}}">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container /- -->
    </div><!-- logo-add-block /- -->

    <!-- menu-block -->
    <div class="menu-block">
        <!-- container -->
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <a href="index.html" class="logo"><img src="images/logo.png" alt="logo"></a>
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class=""><a title="Home" href="{{route('trangchu')}}">Trang chủ</a></li>

                        <li><a title="About Us" href="{{route('sanpham')}}">Cửa hàng</a></li>
                         {{-- <li class="dropdown ">
                            <a title="categories" href="02_categories.html" class="dropdown-toggle" data-toggle="dropdown">Danh mục
                               
                            </a>
                            <ul class="dropdown-menu  row">
                                
                                <li class="col-md-3 col-sm-6">
                                    <ul>


                                        <li class="dropdown-header">Áo thun</li>
                                      
                                        @foreach($loai as $loai)
                                        <li><a title="Unique Features" href="{{route('productCategories',$loai->id)}}">{{$loai->category_name}}</a></li>

                                        @endforeach
                                       
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>  --}}
                        <!-- <li><a title="Look Book" href="look-book.html">Look Book</a></li>								 -->
                        {{-- <li><a title="Blog" href="12_blog.html">Blog</a></li> --}}
                    <li><a title="About Us" href="{{route('thongtin')}}">Thông tin</a></li>
                        <!-- <li class="dropdown">
                            <a title="pages" href="about.html" class="dropdown-toggle" data-toggle="dropdown">pages</a>
                            <ul class="dropdown-menu">
                                <li><a title="Shortcodes" href="shortcodes.html">Shortcodes</a></li>
                                <li><a title="404" href="404.html">404</a></li>
                            </ul>
                        </li> -->
                        <li><a title="Contact us" href="{{route('lienhe')}}">Liên hệ</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </nav>
        </div><!-- container /- -->
    </div><!-- menu-block /- -->
</header>


{{--@dd(Session::get('cart'))--}}

{{-- @if(Session::get('cart'))

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
@endif --}}
