@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Nội dung liên hệ</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.contacts.index') }}">Danh sách</a></li>
        <li class="breadcrumb-item active">Nội dung</li>
    </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nội dung liên hệ</h3>
            </div>
            <form action="" method="">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col col-6">
                            <label for="name">Tên của người liên hệ</label>
                            <input type="text" value="{{ $contact->name }}" readonly name="name" class="form-control" id="name">
                        </div>
                        <div class="col col-6">
                            <label for="email">Địa chỉ email</label>
                            <input type="text" value="{{ $contact->email }}" readonly name="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col col-6">
                            <label for="subject">Tên subject</label>
                            <input type="text" value="{{ $contact->subject }}" readonly name="subject" class="form-control" id="subject">
                        </div>
                        <div class="col col-6">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" value="{{ $contact->phone }}" readonly name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" value="{{ $contact->address }}" readonly name="address" class="form-control" id="address">
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung phản hồi</label>
                        <textarea name="content" id="content" class="form-control" rows="3" readonly>{{ $contact->content }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('admin.contacts.feedback', $contact->id) }}">Phản hồi</a>
                    <a class="btn btn-warning" href="{{ route('admin.contacts.index') }}">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop