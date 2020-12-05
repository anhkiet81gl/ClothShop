<!-- Category Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_name', 'Tên loại:') !!}
    {!! Form::text('category_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-default">Trở về</a>
</div>
