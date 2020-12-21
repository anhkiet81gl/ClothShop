<x-master>
    <!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				{{-- <li><a title="Home" href="index.html"></a>Trang chủ</a></li>
				<li class="active">Sản phẩm</li> --}}
			</ol>
			<div class="return-home-link pull-right">
				{{-- <a title="Return to home page" href="{{route('trangchu')}}">Trở về trang chủ</a> --}}
			</div>
		</div>
		<div class="page-header ow-bottom-padding categories">
			<h3>Sản phẩm</h3>
			<!-- <p>786+ Products</p> -->
		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->

	<!-- Product Filter -->
	<div class="product-filter">
		<div class="container">
			<div class=" bottom-shadow">
				<!-- <div class="col-md-4">
					<div id="slider-range"></div>
					<div class="price-input">
						<label>or </label>
						<input type="text" id="amount">
						<label>to </label>
						<input type="text" id="amount2">

						<select class="form-control minimal">
							<option value="selected">Dollar</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
						</select>
					</div>
				</div> -->

				<div class="col-md-12 no-padding">
					<form>
						<div class="col-md-4 col-sm-4 no-padding">
							<div class="product-search-option">
								<div class="from-group">
									<select class="form-control minimal">
										<option value="selected">Danh mục</option>
										@foreach($categories as $categories)
                                        
										<option value=""><a title="Unique Features" href="{{route('productCategories',$categories->id)}}">{{$categories->category_name}}</a></option>
                                        @endforeach
									</select>
								</div>
							</div>
						</div>
						
					</form>
				</div>
			</div>
			<!-- <div class="pillbox">
				<a title="Close Icon" href="#">Ethenic Wear <i class="fa fa-close"></i></a>
				<a title="Close Icon" href="#">Gucchi <i class="fa fa-close"></i></a>
				<a title="Close Icon" href="#">White <i class="fa fa-close"></i></a>
				<a title="Close Icon" href="#">34-54 Size <i class="fa fa-close"></i></a>
				<a title="Close Icon" href="#">clear All search tags</a>
			</div> -->
		</div>
	</div>
	<!-- Product Filter /- -->

	<!-- Feature Product -->
	<div id="featured-products" class="featured-products bottom-shadow">
		<!-- container -->
		<div class="container">
			<div class=" product-box-main">
				@foreach ($products as $products)
				<div class="col-md-3 col-sm-6 col-xs-6 main-product">
					<div class="category-box product-box">
						{{-- <span class="sale">sales</span> --}}
						<div class="inner-product">
							<img src="{{$products->product_image }}" alt="featured-img"/>
							<div class="product-box-inner">
								<ul>
									<li><a title="Eye Icon" href="images/featured/featured-1.jpg"><i class="fa fa-eye"></i></a></li>
									<li><a title="Heart Icon" href="#"><i class="fa fa-heart"></i></a></li>
								</ul>
								<a title="Add to cart" href="" class="btn">Thêm vào giỏ</a>
							</div>
						</div>
					</div>
					<a title="Fashionable Pink Top" href="chi-tiet-sanpham/{{ $products->id }}" class="product-title">{{ $products->product_name }}</a>
					<ul class="star">
						<li>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						</li>
					</ul>
					<span class="amount">{{ $products->price }} VND</span>
				</div>
				@endforeach
			</div>
		</div><!-- container /- -->
	</div>
	<!-- Feature Product /- -->

	<div class="loading">
		<a title="Click here for more products" href="#">
			<!-- <img alt="loading icon" src="images/load.gif">
			<p>click here for more products</p> -->
			<button type="button" class="btn btn-dark">Xem thêm</button>
		</a>
	</div>
</x-master>
