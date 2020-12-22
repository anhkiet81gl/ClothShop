<x-master>
    <!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				{{-- <li><a title="Home" href="index.html">Home</a></li>
				<li><a title="Clothing" href="#">Clothing</a></li>
				<li><a title="Women's Clothing" href="#">Women's Clothing</a></li>
				<li class="active">ALl Categories</li> --}}
			</ol>
			<div class="return-home-link pull-right">
				{{-- <a title="Return to home page" href="index.html">return to home page</a> --}}
			</div>
		</div>
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<!-- Single Product -->
	<div id="single-product" class="single-product">
		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- col-md-7 -->
				<div class="col-md-7">
					<div class="large-product">
						{{-- <div id="about-carousel" class="col-md-3 col-sm-3 col-xs-3 flexslider product-thumb no-padding">
							<ul class="slides">
								<li>
									<img src="images/single-product/product-thumb-1.jpg" alt="product-thumb">
								</li>
								<li>
									<img src="images/single-product/product-thumb-2.jpg" alt="product-thumb">
								</li>
								<li>
									<img src="images/single-product/product-thumb-3.jpg" alt="product-thumb">
								</li>								
							</ul>
						</div> --}}
						<div id="about-slider" class="flexslider col-md-9 col-sm-9 col-xs-9 product-slider">
							<ul class="slides">
								<li>
									<img class="magniflier" src="{{$products->product_image }}" alt="product-thumb" />
								</li>
							</ul>
						</div>
					</div>
					<!-- Section Header /- -->
					<div class="page-header ow-bottom-padding categories">
						<!-- <h3><span>Beauty & Brain</span> Related Products</h3> -->
					</div>
					<div class="category-box-main product-box-main">
						<div class="col-md-6 col-sm-6 col-xs-6 main-product">
							<!-- <div class="category-box product-box">
								<div class="inner-product">
									<img src="images/featured/featured-2.jpg" alt="featured-img"/>
									<div class="product-box-inner">
										<ul>
											<li><a title="Eye Icon" href="images/featured/featured-2.jpg"><i class="fa fa-eye"></i></a></li>
											<li><a title="Heart Icon" href="#"><i class="fa fa-heart"></i></a></li>
										</ul>
										<a title="Add to cart" href="#" class="btn">add to cart</a>
									</div>
								</div>
							</div> -->
							<!-- <a title="Fashionable Pink Top" href="#" class="product-title">Groom Style</a>
							<ul class="star">
								<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								</li>
							</ul>
							<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span> -->
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 main-product">
							<!-- <div class="category-box product-box">
								<span class="sale">sales</span>
								<div class="inner-product">									
									<img src="images/featured/featured-3.jpg" alt="featured-img"/>
									<div class="product-box-inner">
										<ul>
											<li><a title="Eye Icon" href="images/featured/featured-3.jpg"><i class="fa fa-eye"></i></a></li>
											<li><a title="Heart Icon" href="#"><i class="fa fa-heart"></i></a></li>
										</ul>
										<a title="Add to cart" href="#" class="btn">add to cart</a>
									</div>
								</div>
							</div>
							<a title="Fashionable Pink Top" href="#" class="product-title">Groom Style</a>
							<ul class="star">
								<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								</li>
							</ul>
							<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span> -->
						</div>
						<div class="drop-line bottom-shadow"></div>
					</div>
				</div>
				<!-- col-md-7 /- -->
				
				<!-- col-md-5 -->
				<div class="col-md-5 single-product-sidebar">
					
					<div class="page-header">
						<h3>Tên sản phẩm {{$products->product_name }}</h3>
					</div>
					{{-- <ul class="star">
						<li>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i> <span>- Đánh giá</span>
						</li>
					</ul> --}}
					{{-- <p>Thông tin về sản phẩm</p> --}}
					<ul class="single-side-widget top-social ow-left-padding">
						<li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a title="Pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
						<li>
							<a title="QR Code" href="#">
								<svg class="qrcode" viewBox="0 0 401.994 401.994">
									<path d="M0,401.991h182.724V219.265H0V401.991z M36.542,255.813h109.636v109.352H36.542V255.813z"/>
									<rect x="73.089" y="292.355" width="36.544" height="36.549"/>
									<rect x="292.352" y="365.449" width="36.553" height="36.545"/>
									<rect x="365.442" y="365.449" width="36.552" height="36.545"/>
									<polygon points="365.446,255.813 328.904,255.813 328.904,219.265 219.265,219.265 219.265,401.991 255.813,401.991     255.813,292.355 292.352,292.355 292.352,328.904 401.991,328.904 401.991,219.265 401.991,219.265 365.446,219.265   "/>
									<path d="M0,182.728h182.724V0H0V182.728z M36.542,36.542h109.636v109.636H36.542V36.542z"/>
									<rect x="73.089" y="73.089" width="36.544" height="36.547"/>
									<path d="M219.265,0v182.728h182.729V0H219.265z M365.446,146.178H255.813V36.542h109.633V146.178z"/>
									<rect x="292.352" y="73.089" width="36.553" height="36.547"/>
								</svg>
							</a>
						</li>
					</ul>
					<h4>Màu sắc</h4>
					<ul id="color-widget" class="single-side-widget color-widget top-social ow-left-padding">
						<li><a title="Check" href="#" class="white"><i class="fa fa-check"></i></a></li>
						<li><a title="Check" href="#" class="color color1 active"><i class="fa fa-check"></i></a></li>
						<li><a title="Check" href="#" class="color4"><i class="fa fa-check"></i></a></li>
						<li><a title="Check" href="#" class="color5"><i class="fa fa-check"></i></a></li>
					</ul>
					<h4>Kích thước</h4>
					<ul id="size-widget" class="single-side-widget size-widget top-social ow-left-padding">
						<li><a title="XS" href="#" class="">XS</a></li>
						<li><a title="S" href="#" class="">S</a></li>
						<li><a title="M" href="#" class="active">M</a></li>
						<li><a title="L" href="#" class="">L</a></li>
						<li><a title="XL" href="#" class="">XL</a></li>
					</ul>
					{{-- <h4>Hãng</h4>
					<ul class="single-side-widget top-social ow-left-padding">
						<li>
							<!-- <img src="images/summary/gucci-icon.png" alt="gucci" /> -->
							<p>Để logo hãng</p>
						</li>
					</ul> --}}
					
					<aside class="widget widget_recent_post">						
						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul role="tablist" class="nav nav-tabs bottom-shadow">
								<li class="active" role="presentation"><a title="Giá" data-toggle="tab" role="tab" aria-controls="pricing" href="#pricing">Giá</a></li>
								<li role="presentation"><a title="Kích thước" data-toggle="tab" role="tab" aria-controls="size-chart" href="#size-chart">Kích thước</a></li>
								<li class="" role="presentation"><a title="Đánh giá" data-toggle="tab" role="tab" aria-controls="reviews" href="#reviews">Đánh giá</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div id="pricing" class="tab-pane active" role="tabpanel">
									<div class="shopping-cart-table">
										<table>
											<tbody>
												<tr class="cart-subtotal">
													<th>Giá sản phẩm</th>
													<td><span class="amount">{{$products->price }}</span></td>
												</tr>
												<tr class="cart-subtotal">
													<th>Số lượng sản phẩm</th>
													<td>
														<select class="minimal">
															<option>02</option>
															<option>03</option>
														</select>
													</td>
												</tr>

											</tbody>
										</table>
										<ul>
											<li><a title="But Now" href="{{route('addToCart',$products->id)}}">Thêm vào giỏ hàng</a></li>
											<!-- <li><a title="Favorites" href="#">favorites</a></li> -->
										</ul>
									</div>
									
								</div>
								<div id="size-chart" class="tab-pane" role="tabpanel">
									<div class="shopping-cart-table size-chart">
										<div class="col-md-5 col-sm-5">
											<ol>
												<li>Nam</li>
												<li><span>1.</span>Ngực</li>
												<li><span>2.</span>Lưng</li>
											</ol>
											
										</div>
										<div class="col-md-6 col-sm-6">
											<table>
												<thead>
													<tr>
														<th>Kích thước</th>
														<th>Ngực</th>
														<th>Lưng</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>S</td>
														<td>35-37</td>
														<td>30-32</td>
													</tr>
													<tr>
														<td>M</td>
														<td>38-40</td>
														<td>34-36</td>
													</tr>
													<tr>
														<td>L</td>
														<td>41-43</td>
														<td>36-38</td>
													</tr>
													<tr>
														<td>X-L</td>
														<td>44-46</td>
														<td>40-42</td>
													</tr>
													<tr>
														<td>XX-L</td>
														<td>47-49</td>
														<td>44-46</td>
													</tr>
												</tbody>
											</table>
										</div>	
										<div class="col-md-5 col-sm-5">
											<ol>
												<li>Nữ</li>
												<li><span>1.</span>Ngực</li>
												<li><span>2.</span>Lưng</li>
												<li><span>3.</span>Hông</li>
											</ol>
											
										</div>
										<div class="col-md-7 col-sm-7">
											<table>
												<thead>
													<tr>
														<th>Kích thước</th>
														<th>Ngực</th>
														<th>Lưng</th>
														<th>Hông</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>x-s/0-2</td>
														<td>31-33</td>
														<td>23-24</td>
														<td>33-34</td>
													</tr>
													<tr>
														<td>s-/4-6</td>
														<td>33-34</td>
														<td>25-26</td>
														<td>35-36</td>
													</tr>
													<tr>
														<td>m/8-10</td>
														<td>35-36</td>
														<td>27-28</td>
														<td>37-38</td>
													</tr>
													<tr>
														<td>l/12-14</td>
														<td>37-38</td>
														<td>29-30</td>
														<td>39-40</td>
													</tr>
													<tr>
														<td>x-l/16-18</td>
														<td>39-40</td>
														<td>31-32</td>
														<td>41-42</td>
													</tr>
												</tbody>
											</table>
										</div>	
									</div>
								</div>
								<div id="reviews" class="tab-pane" role="tabpanel">
									<div class="shopping-cart-table">
										<div class="review-box">
											<div class="col-md-5 col-sm-5">
												<h3>Tiêu đề:</h3>
											</div>
											<div class="col-md-7 col-sm-7">
												<input type="text"  />
											</div>
										</div>
										<div class="review-box">
											<div class="col-md-5 col-sm-5">
												<h3>Bình luận:</h3>
											</div>
											<div class="col-md-7 col-sm-7">
												<textarea ></textarea>
											</div>
											
										</div>
										<div class="review-box">
											<div class="col-md-5 col-sm-5">
												<h3>Đánh giá:</h3>
											</div>
											<div class="col-md-7 col-sm-7">
												<p>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													
												</p>
											</div>
										</div>
										<div class="review-box">
											<div class="col-md-5 col-sm-5">
												<h3>Tên</h3>
											</div>
											<div class="col-md-7 col-sm-7">
												<input type="text"  />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</aside>
				</div>
				<!-- col-md-5 /- -->
			</div>
		</div><!-- Container /- -->
	</div>
	<!-- Single Product /- -->
	
</x-master>