<!-- Category Name Field -->
<div class="form-group">
    {!! Form::label('category_name', 'Tên loại:') !!}
    <p>{{ $categories->category_name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Ngày tạo:') !!}
    <p>{{ $categories->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Ngày cập nhập:') !!}
    <p>{{ $categories->updated_at }}</p>
</div>

