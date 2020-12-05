<!doctype html>
<!--
**********************************************************************************************************
    Copyright (c) 2015 Webstrot Technology
********************************************************************************************************** -->
<!--
Template Name: Luxury Shop Ecommerce HTML Template
Version: 1.0.0
Author: webstrot
Website: http://webstrot.com/
Purchase: http://themeforest.net/user/webstrot  -->

<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""> <!--<![endif]-->

<!-- Mirrored from luxuryshop.webstrot.com/02_Fashion_Mens/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 10:48:34 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	@include('layouts.clothshop.css')

<script src='../google_analytics_auto.html'></script></head>
<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
	<!-- LOADER -->
	<div id="site-loader" class="load-complete">
		<div class="load-position">
			<div class="logo"><img src="images/logo.png" alt="logo"></div>
			<h6>Đang tải ...</h6>
			<div class="loading">
				<div class="loading-line"></div>
				<div class="loading-break loading-dot-1"></div>
				<div class="loading-break loading-dot-2"></div>
				<div class="loading-break loading-dot-3"></div>
			</div>
		</div>
	</div>
	<!-- Loader /- -->

	<!-- Style Switcher -->
	<div class="color-switcher" id="choose_color">
		<a href="#." class="picker_close">
			<i class="fa fa-gear fa-spin" ></i>
		</a>
		<div class="theme-colours">
			<p>Choose Colour style</p>
			<ul>
				<li><a href="#." class="blue" id="default"></a></li>
				<li><a href="#." class="cyan" id="cyan"></a></li>
				<li><a href="#." class="dark-blue" id="dark-blue"></a></li>
				<li><a href="#." class="green" id="green"></a></li>
				<li><a href="#." class="red" id="red"></a></li>
				<li><a href="#." class="yellow" id="yellow"></a></li>
				<li><a href="#." class="light-green" id="light-green"></a></li>
				<li><a href="#." class="orange" id="orange"></a></li>
			</ul>
		</div>
	</div><!-- Style Switcher /- -->

	<a id="top"></a>

	<!-- Header Section -->
	@include('layouts.clothshop.header')
	<!-- Header Section /- -->

	@yield('content')

	<!-- Footer Section -->
    @include('layouts.clothshop.footer')
	<!-- Footer Section /- -->

	<!-- jQuery Include -->
	@include('layouts.clothshop.js')

</body>

<!-- Mirrored from luxuryshop.webstrot.com/02_Fashion_Mens/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 10:50:20 GMT -->
</html>
