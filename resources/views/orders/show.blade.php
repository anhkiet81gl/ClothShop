@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hiển thị thông tin đơn hàng
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('orders.show_fields')
                    <a href="{{ route('orders.index') }}" class="btn btn-default">Trở về</a>
                </div>
            </div>
        </div>
    </div>
@endsection
