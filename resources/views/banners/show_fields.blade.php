<!-- Slide Name Field -->
<div class="form-group">
    {!! Form::label('slide_name', 'Tên slide:') !!}
    <p>{{ $banner->slide_name }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $banner->link }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Ngày tạo:') !!}
    <p>{{ $banner->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Ngày cập nhập:') !!}
    <p>{{ $banner->updated_at }}</p>
</div>

