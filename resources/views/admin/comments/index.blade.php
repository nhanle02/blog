@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Quản lý bình luận</h1>
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
                    <a href="{{ route('admin.comments.create') }}" class="btn btn-success">Tạo mới</a>
                </h3>
                <div class="card-tools">
                    <form action="" method="GET">
                        <div class="input-group input-group-sm">
                            <select name="user" class="form-control">
                                <option value="">Tất cả</option>
                                @foreach ($users as $user)
                                    <option {{ request()->get('user') == $user->id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->first_name . ' ' . $user->last_name }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="content" value="{{ request()->get('content') }}" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Bài viết</th>
                            <th>Người bình luận</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                            <th>Ngày bình luận</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td>{{ $comment->post->title }}</td>
                                <td>{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</td>
                                <td>{{ $comment->content }}</td>
                                <td><span class="badge badge-{{ $status[$comment->status]['class'] }}">{{ $status[$comment->status]['label'] }}</span></td>
                                <td>{{ $comment->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.comments.edit', $comment->id) }}" class="btn btn-info btn-sm">Chỉnh sửa</a>
                                    <button data-action="{{ route('admin.comments.delete', $comment->id) }}" class="btn btn-danger btn-sm js-display-modal-delete">Xoá</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
@stop