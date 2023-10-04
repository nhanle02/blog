@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Tạo mới người dùng</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Danh sách</a></li>
        <li class="breadcrumb-item active">Tạo mới</li>
    </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form tạo mới</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="first_name">Họ</label>
                        <input type="text" value="{{ old('first_name') }}" name="first_name" class="form-control" id="first_name" placeholder="Nhập họ">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Tên</label>
                        <input type="text" value="{{ old('last_name') }}"  name="last_name" class="form-control" id="last_name" placeholder="Nhập tên">
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="display_name">Tên hiển thị</label>
                        <input type="text" value="{{ old('display_name') }}"  name="display_name" class="form-control" id="display_name" placeholder="Nhập tên hiển thị">
                        @error('display_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" value="{{ old('username') }}" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Địa chỉ email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Nhập địa chỉ email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Chọn giới tính</label>
                        <select name="gender" id="gender" class="form-control">
                            @foreach ($genders as $key => $gender)
                            
                                <option value="{{ $key }}" @if ($key == 'gender') selected @endif>{{ $gender }}</option>
                            @endforeach
                        </select>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <div class="input-group date" id="birthday" data-target-input="nearest">
                            <input type="text" value="{{ old('birthday') }}" name="birthday" class="form-control datetimepicker-input" data-target="#birthday">
                            <div class="input-group-append" data-target="#birthday" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                        @error('birthday')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="role">Vai trò</label>
                        <select name="role" id="role" class="form-control">
                            @foreach ($roles as $key => $role)
                                <option value="{{ $key }}" {{ old('role')===$key ? 'selected' : '' }} >{{ $role }}</option>
                            @endforeach
                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" value="{{ old('phone') }}" name="phone" class="form-control" id="phone" placeholder="Nhập nhập số điện thoại">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="about">Thông tin thêm</label>
                        <textarea name="about" value="{{ old('about') }}" name="about" id="about" class="form-control" rows="3" placeholder="Nhập thông tin thêm"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="status" class="custom-control-input" id="status">
                            <label class="custom-control-label" for="status">Trạng thái</label>
                        </div>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Nhập lại mật khẩu">
                        @error('password_comfimation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="avatar">Ảnh đại diện</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="avatar" class="custom-file-input" id="avatar">
                                <label class="custom-file-label" for="avatar">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        @error('avatar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-default">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#birthday').datetimepicker({ 
                format: 'L',
            })
        })
    </script>
@endpush