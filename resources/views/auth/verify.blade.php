@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Xác nhận email của bạn</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">Link xác nhận đã được gửi tới tài khoản email của bạn
                            </div>
                        @endif
                        <p>Trước khi tiếp tục, hãy kiểm tra email để xác nhận. Nếu không nhận được link xác nhận</p>
                        <a href="{{ route('verification.resend') }}">Ấn vào đây để gửi lại</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection