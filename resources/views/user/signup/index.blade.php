@extends('user.contact.contact-layout')

@section('breadcrumb')
<section class="page-header">
    <div class="container-xl">
        <div class="text-center">
            <h1 class="mt-0 mb-2">Đăng ký</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@stop

@section('content')
<form id="register-form" class="register-form" action="" method="post" novalidate="novalidate">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h5 class="text-center">Đăng ký tài khoản với Blog</h5>
            <p>Chào mừng bạn đến Nền tảng Blog! Tham gia cùng chúng tôi để tìm kiếm thông tin hữu ích cần thiết. Vui lòng điền thông tin của bạn vào biểu mẫu bên dưới để tiếp tục.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nhập họ" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Nhập tên" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Địa chỉ email" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Nhập tên đăng nhập" required="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu" required="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Nhập xác nhận mật khẩu" required="">
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Tạo tài khoản</button>
            </div>
            <div class="d-flex justify-content-between my-2">
                <a href="{{ route('user.login.index') }}" class=""><small>Đăng nhập</small></a>
            </div>
            <div class="d-flex align-items-center justify-content-between my-4">
                <hr class="flex-fill m-0">
                <span class="mx-3">Đăng nhập bằng</span>
                <hr class="flex-fill m-0">
            </div>
            <div class="social-login">
                <ul class="list-unstyled d-flex align-items-center justify-content-between flex-wrap mb-0">
                    <button type="button" class="btn btn-default">
                        <i class="fab fa-facebook-f mr-1"></i>
                        <span>Facebook</span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <i class="fab fa-google mr-1"></i>
                        <span>Google</span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <i class="fab fa-github mr-1"></i>
                        <span>Github</span>
                    </button>
                </ul>
            </div>
        </div>
    </div>
</form>
@stop