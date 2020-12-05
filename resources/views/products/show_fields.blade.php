<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Tên sản phẩm:') !!}
    <p>{{ $products->product_name }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'ID Loại sản phẩm:') !!}
    <p>{{ $products->category_id }}</p>
</div>

<!-- Product Image Field -->
<div class="form-group">
    {!! Form::label('product_image', 'Hình ảnh:') !!}
    <p>{{ $products->product_image }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Giá:') !!}
    <p>{{ $products->price }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Miêu tả:') !!}
    <p>{{ $products->description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Ngày tạo:') !!}
    <p>{{ $products->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Ngày cập nhập:') !!}
    <p>{{ $products->updated_at }}</p>
</div>

