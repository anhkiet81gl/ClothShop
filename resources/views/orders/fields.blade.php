<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'ID Khách hàng:') !!}
    {!! Form::select('customer_id', \App\Models\Customer::pluck('name','id'), null, ['class' => 'form-control', 'placeholder' => '', 'disabled' => 'disabled']) !!}
{{--    {!! Form::text('customer_id', null, ['class' => 'form-control']) !!}--}}
</div>

<!-- Delivery Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivery_id', 'ID Giao hàng:') !!}
    {!! Form::select('delivery_id', \App\Models\Delivery::pluck('name','id'), null, ['class' => 'form-control', 'placeholder' => '']) !!}
{{--    {!! Form::text('delivery_id', null, ['class' => 'form-control']) !!}--}}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Tổng tiền:') !!}
    {!! Form::text('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('note', 'Ghi chú:') !!}
    {!! Form::text('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('orders.index') }}" class="btn btn-default">Trở về</a>
</div>
