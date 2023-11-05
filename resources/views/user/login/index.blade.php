@extends('user.contact.contact-layout')

@section('breadcrumb')
<section class="page-header">
    <div class="container-xl">
        <div class="text-center">
            <h1 class="mt-0 mb-2">Đăng nhập</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@stop

@section('content')
<form id="login-form" class="login-form" action="" method="post" novalidate="novalidate">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h5 class="text-center">Đăng nhập vào Blog</h5>
            <div class="form-group">
                <input type="text" class="form-control" name="username" value="" id="username" placeholder="Nhập tên đăng nhập hoặc email" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required="">
            </div>
            <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default btn-login">Đăng nhập</button>
            <div class="d-flex justify-content-between my-2">
                <a href="{{ route('user.forgot.index') }}" class=""><small>Quên mật khẩu?</small></a>
                <a href="{{ route('user.signup.index') }}" class=""><small>Tạo tài khoản</small></a>
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