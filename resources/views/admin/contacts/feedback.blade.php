@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Phản hồi</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.contacts.index') }}">Danh mục</a></li>
        <li class="breadcrumb-item active">Phản hồi</li>
    </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Phản hồi</h3>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('admin.contacts.send', $contact->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="email">Tên email</label>
                        <input type="text" value="{{ $contact->email }}" readonly name="email" class="form-control js-handle-name" id="email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Tên subject</label>
                        <input type="text" value="{{ old('subject') }}" name="subject" class="form-control" id="subject" placeholder="Nhập subject">
                        @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Nhập thông tin mô tả</label>
                        <textarea name="content" id="content" class="form-control" rows="3" placeholder="Nhập nội dung gửi"></textarea>
                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="{{ route('admin.contacts.index') }}">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop