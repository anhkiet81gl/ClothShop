@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Chỉnh sửa đơn hàng
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($order, ['route' => ['orders.update', $order->id], 'method' => 'patch']) !!}

                        @include('orders.fields')

                   {!! Form::close() !!}

               </div>
           </div>
       </div>
       <div class="panel panel-default">
           <!-- Default panel contents -->
           <div class="panel-heading">Order items</div>

           <!-- Table -->
           <table class="table">
               <thead>
               <tr>
                   <th>Product Name</th>

               </tr>
               </thead>
               <tbody>
               @foreach($orderItems as $orderItem)
                   <tr>
                       <td>{{$orderItem->product->product_name}}</td>
                       <td><button class="btn btn-danger">Xóa</button></td>
                   </tr>
               @endforeach
               </tbody>
           </table>
       </div>
   </div>
@endsection
