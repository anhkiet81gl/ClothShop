<x-master>
    <!-- Slider Section -->
	<div id="slider-section" class="slider-section">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

				<div class="item active">
					<img src="https://clothshop.studio/banner/Untitled-1.png" alt="slide-1">

				</div>

				@foreach ($banner as $banner)
				<div class="item">
				<img src="{{$banner->link}}" alt="slide-{{$banner->id}}">

				</div>
				@endforeach




			</div>
			<!-- Controls -->
			<a title="Previous" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a title="Next" class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
    <!-- Slider Section /- -->

    <!-- Category Section -->
	<div id="category-section" class="category-section bottom-shadow">
		<!-- container -->
		<div class="container">
			<!-- <div class="col-md-3 categories-title col-sm-4">
				<h3>Special Offer’s and Discount</h3>
				<p>Vivamus nec urna luctus, dignissim est</p>
			</div>
			<div class="col-md-6 col-sm-4">
				<h3>70,000+ Collection</h3>
				<h4>500+ Stylish Brand’s</h4>
			</div>
			<div class="col-md-3 col-sm-4 categories-title">
				<h3>Free 30 Days Returns</h3>
				<p>Sed at justo eget nulla placerat</p>
			</div> -->
			<div class="section-header">
				<h3>Sản phẩm mới nhất</h3>
			</div><!-- Section Header /- -->
			<div class="category-box-main categories-slider">
				<!-- Owl Carousel -->
				<div id="categories-list" class="owl-carousel owl-theme our-partner">
					@foreach ($product as $product)
					<div class="item">
						<div class="category-box">
							<span class="sale">Mới</span>
							<a title="Mens" href="{{route('productDetail',$product->id)}}">
								<img src="{{$product->product_image }}" alt="cat-img" />
								<span>{{$product->product_name }}</span>
								<div class="cat-hover"></div>
							</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Category Section /- -->

	<!-- Feature Product -->
	<Section id="featured-products" class="featured-products bottom-shadow">
		<!-- container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3>Sản phẩm bán chạy</h3>
			</div><!-- Section Header /- -->

			<div class=" product-box-main">
				@foreach ($products as $products)
				<div class="col-md-3 col-sm-6 col-xs-6 main-product">
					<div class="category-box product-box">
						{{-- <span class="sale">Giảm giá</span> --}}
						<div class="inner-product">
							<img src="{{$products->product_image }}" alt="featured-img"/>
							<div class="product-box-inner">
								<ul>
									<li><a title="Eye" href="{{$products->product_image }}"><i class="fa fa-eye"></i></a></li>

								</ul>
								<a title="Add to cart" href="{{route('addToCart',$products->id)}}" class="btn">Thêm vào giỏ</a>
							</div>
						</div>
					</div>
					<a href="{{route('productDetail',$products->id)}}" class="product-title">{{$products->product_name }}</a>
					<ul class="star">
						<li>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						</li>
					</ul>
					<span class="amount">{{$products->price }}</span>
				</div>
				@endforeach
			</div>
		</div><!-- container /- -->
	</section>
	<div id="our-partner-section" class="our-partner-section bottom-shadow">
        <!-- container -->
        <div class="container">
            <!-- Section Header -->
            <div class="section-header">
                <h3>Những thương hiệu nổi tiếng</h3>
            </div><!-- Section Header /- -->
            <!-- Owl Carousel -->
            <div id="our-partner" class="owl-carousel owl-theme our-partner">
				<div class="item">
					<a title="Partner" href="#" class="partner-box">
					<img src="{{URL::asset('img/hang/hang1.png')}}" alt="partner-1"/>
					</a>
				</div>
				<div class="item">
					<a title="Partner" href="#" class="partner-box">
					<img src="{{URL::asset('img/hang/hang2.png')}}" alt="partner-1"/>
					</a>
				</div>
				<div class="item">
					<a title="Partner" href="#" class="partner-box">
					<img src="{{URL::asset('img/hang/hang3.png')}}" alt="partner-1"/>
					</a>
				</div>
				<div class="item">
					<a title="Partner" href="#" class="partner-box">
					<img src="{{URL::asset('img/hang/hang4.png')}}" alt="partner-1"/>
					</a>
				</div>

			</div><!-- Owl Carousel /- -->
        </div><!-- container /- -->
    </div><!-- Our Partner /- -->

</x-master>
