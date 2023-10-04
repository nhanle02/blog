@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Chỉnh sửa người dùng</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Danh sách</a></li>
        <li class="breadcrumb-item active">Chỉnh sửa</li>
    </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form chỉnh sữa</h3>
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
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="first_name">Họ</label>
                        <input type="text" value="{{ old('first_name', $user->first_name) }}" name="first_name" class="form-control" id="first_name" placeholder="Nhập họ">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Tên</label>
                        <input type="text" value="{{ old('last_name', $user->last_name) }}"  name="last_name" class="form-control" id="last_name" placeholder="Nhập tên">
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="display_name">Tên hiển thị</label>
                        <input type="text" value="{{ old('display_name', $user->display_name) }}"  name="display_name" class="form-control" id="display_name" placeholder="Nhập tên hiển thị">
                        @error('display_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" value="{{ old('username', $user->username) }}" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Địa chỉ email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" id="email" placeholder="Nhập địa chỉ email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Chọn giới tính</label>
                        <select name="gender" id="gender" class="form-control">
                            @foreach ($genders as $key => $gender)
                            
                                <option value="{{ $key }}" @if ($key == old('gender')) selected @endif>{{ $gender }}</option>
                            @endforeach
                        </select>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <div class="input-group date" id="birthday" data-target-input="nearest">
                            <input type="text" value="{{ old('birthday', Date('d/m/Y', strtotime($user->birthday))) }}" name="birthday" class="form-control datetimepicker-input" data-target="#birthday">
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
                                <option value="{{ $key }}" {{ old('role') === $key ? 'selected' : '' }} >{{ $role }}</option>
                            @endforeach
                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" value="{{ old('phone', $user->phone) }}" name="phone" class="form-control" id="phone" placeholder="Nhập nhập số điện thoại">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="about">Thông tin thêm</label>
                        <textarea name="about" value="" name="about" id="about" class="form-control" rows="3" placeholder="Nhập thông tin thêm">{{ old('about', $user->about) }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" {{ old('status', $user->status) ? 'checked' : '' }} name="status" class="custom-control-input" id="status">
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
                        <div class="">
                            <div class="custom-file">
                                <input type="file" name="avatar" class="custom-file-input" id="avatar">
                                <label class="custom-file-label" for="avatar">
                                    @if (!empty($user->avatar))
                                        {{ asset($user->avatar) }}
                                        @else
                                            Chọn file
                                    @endif
                                    
                                </label>
                            </div>
                            <div class="show-img">
                                @if (!empty($user->avatar))
                                    <img src="{{  asset($user->avatar) }}" alt="" width="200px" height="200px">
                                @endif
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