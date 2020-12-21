<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Tên sản phẩm:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'ID Loại sản phẩm:') !!}
    {!! Form::select('category_id', \App\Models\Categories::pluck('category_name','id'), null, ['class' => 'form-control', 'placeholder' => '']) !!}
{{--    {!! Form::text('category_id', null, ['class' => 'form-control']) !!}--}}
</div>

<!-- Product Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_image', 'Hình ảnh:') !!}
    {!! Form::text('product_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Giá:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Miêu tả:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">Trở về</a>
</div>
