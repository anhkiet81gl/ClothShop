<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Tên:') !!}
    <p>{{ $customer->name }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Giới tính:') !!}
    <p>{{ $customer->gender }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $customer->email }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Địa chỉ:') !!}
    <p>{{ $customer->address }}</p>
</div>

<!-- Phone Number Field -->
<div class="form-group">
    {!! Form::label('phone_number', 'Số diện thoại:') !!}
    <p>{{ $customer->phone_number }}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Ghi chú:') !!}
    <p>{{ $customer->note }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Ngày tạo:') !!}
    <p>{{ $customer->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Ngày cập nhập:') !!}
    <p>{{ $customer->updated_at }}</p>
</div>

