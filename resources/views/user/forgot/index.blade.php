@extends('user.contact.contact-layout')

@section('breadcrumb')
<section class="page-header">
    <div class="container-xl">
        <div class="text-center">
            <h1 class="mt-0 mb-2">Quên mật khẩu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quên mật khẩu</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@stop

@section('content')
<form id="forgot-password-form" class="forgot-password-form" action="" method="post" novalidate="novalidate">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h5 class="text-center">Quên mật khẩu</h5>
            <p>Bạn quên mật khẩu của mình? Đừng lo lắng! Hãy cung cấp cho chúng tôi email bạn sử dụng để đăng ký tài khoản Blog. Chúng tôi sẽ gửi cho bạn một liên kết để đặt lại mật khẩu của bạn qua email đó.</p>
            <div class="form-group">
                <input type="email" value="" class="form-control" name="email" id="email" placeholder="Địa chỉ email" required="">
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Gửi</button>
            </div>
            <div class="d-flex justify-content-between my-2">
                <a href="{{ route('user.login.index') }}" class=""><small>Đăng nhập</small></a>
                <a href="{{ route('user.signup.index') }}" class=""><small>Tạo tài khoản</small></a>
            </div>
        </div>
    </div>
</form>
@stop