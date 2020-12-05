<!-- Slide Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slide_name', 'Tên slide:') !!}
    {!! Form::text('slide_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('banners.index') }}" class="btn btn-default">Trở về</a>
</div>
