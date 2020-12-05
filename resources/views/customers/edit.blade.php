@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Chỉnh sửa thông tin khách hàng
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($customer, ['route' => ['customers.update', $customer->id], 'method' => 'patch']) !!}

                        @include('customers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection