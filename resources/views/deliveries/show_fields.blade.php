<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $delivery->name }}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    <p>{{ $delivery->cost }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $delivery->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $delivery->updated_at }}</p>
</div>

