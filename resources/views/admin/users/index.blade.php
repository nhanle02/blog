@extends('admin.main')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Danh sách người dùng</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách</li>
        </ol>
        </div>
    </div>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-sm">Thêm mới</a>
                </h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Ảnh đại diện</th>
                            <th>Tên đăng nhập</th>
                            <th>Email</th>
                            <th>Tên hiển thị</th>
                            <th>Vai trò</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                @if (!empty($user->avatar))
                                    <img src="{{ $user->avatar }}"  width="100px" height="100px" alt="ảnh đại diện">
                                @endif
                            </td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->full_name }}</td>
                            <td>{{ $roles[$user->role] }}</td>
                            <td>
                                <span class="badge badge-{{ $status[$user->status]['class'] }}">{{ $status[$user->status]['label'] }}</span>
                            </td>
                            <td>{{ date('d/m/y', strtotime($user->created_at)) }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-sm">Chỉnh sửa</a>
                                <a href="{{ route('admin.users.delete', $user->id) }}" class="btn btn-danger btn-sm">Xoá</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            {{ $users->links() }}
            </div>

        </div>

    </div>
</div>
@stop

