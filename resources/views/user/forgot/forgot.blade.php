@extends('user.contact.contact-layout')

@section('breadcrumb')
<section class="page-header">
    <div class="container-xl">
        <div class="text-center">
            <h1 class="mt-0 mb-2">Dat lai mat khau</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dat lai mat khau</li>
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
            <h5 class="text-center">Dat lai mat khau</h5>
            <div class="form-group">
                <input type="text" class="form-control" name="password_email" value="" id="password_email" placeholder="Nhập password duoc gui" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="comfirm_password" name="comfirm_password" placeholder="Nhập lai mật khẩu" required="">
            </div>
            <div class="d-flex justify-content-between my-2">
                <button class="btn btn-default "><small>Cap nhat</small></a>
            </div>
        </div>
    </div>
</form>
@stop