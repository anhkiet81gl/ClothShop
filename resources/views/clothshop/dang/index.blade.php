@foreach ($product as $product)
<div class="col-md-3 col-sm-6 col-xs-6 main-product">
    <div class="category-box product-box">
        <span class="sale">Giảm giá</span>
        <div class="inner-product">
            <img src="{{$product->product_image }}" alt="featured-img"/>
            <div class="product-box-inner">
                <ul>
                    <li><a title="Eye" href="images/featured/featured-1.jpg"><i class="fa fa-eye"></i></a></li>
                    <li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
                </ul>
                <a title="Add to cart" href="#" class="btn">Thêm vào giỏ</a>
            </div>
        </div>
    </div>
    <a href="#" class="product-title">{{$product->product_name }}</a>
    <ul class="star">
        <li>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
        </li>
    </ul>
    <span class="amount">{{$product->price }}</span>
</div>
@endforeach