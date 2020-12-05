@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">


                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total order today</span>
                                <span class="info-box-number">{{$todalOrder}} order</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Revenua Today</span>
                                <span class="info-box-number">{{$todalQtyToday}} vnd</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
