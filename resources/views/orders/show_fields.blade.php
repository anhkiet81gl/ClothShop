<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'ID Khách hàng:') !!}
    <p>{{ $order->customer_id }}</p>
</div>

<!-- Delivery Id Field -->
<div class="form-group">
    {!! Form::label('delivery_id', 'ID Giao hàng:') !!}
    <p>{{ $order->delivery_id }}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Tổng tiền:') !!}
    <p>{{ $order->total }}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Ghi chú:') !!}
    <p>{{ $order->note }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Ngày tạo:') !!}
    <p>{{ $order->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Ngày cập nhập:') !!}
    <p>{{ $order->updated_at }}</p>
</div>

