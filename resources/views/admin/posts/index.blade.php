@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Danh sách Bài viết</h1>
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
        <div class="card">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="card-header">
                <h3 class="card-title">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">Tạo mới</a>
                </h3>
                <div class="card-tools">
                    <form action="" method="GET">
                        <div class="input-group input-group-sm">
                            <select name="uid" id="" class="form-control">
                                <option value="">Tất cả</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id  }}" {{ $user->id == request('uid') ? 'selected' : '' }}>{{ $user->first_name . " " . $user->last_name }}</option>
                                    @endforeach
                            </select>
                            <select name="status" id="" class="form-control">
                                <option value="">Tất cả</option>
                                    @foreach ($status as $key => $sta)
                                        <option value="{{ $key }}" {{ $key == request('status') ? 'selected' : '' }}>{{ $sta['label'] }}</option>
                                    @endforeach
                            </select>
                            <input type="text" name="s" value="{{ request()->get('s') }}" class="form-control float-right" placeholder="Search">
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
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Ảnh bài đăng</th>
                            <th>Slug</th>
                            <th>Người tạo</th>
                            <th>Danh mục</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    @if (!empty($post->image))
                                        <img src="{{ $post->image }}" alt="Ảnh bài đăng" width="100px" height="100px">
                                        @else
                                            Chưa có ảnh
                                    @endif 
                                    
                                </td>
                                <td>{{ $post->slug }}</td>
                                <td>
                                    {{ $post->user->first_name . " " . $post->user->last_name}}
                                </td>
                                <td>
                                    @foreach ($post->categories as $key => $category)
                                        {{-- @if (count($post->categories) - 1 === $key)
                                            {{ $category->name }}
                                            @else
                                                {{ $category->name . ' - ' }}
                                        @endif --}}
                                        @if ($loop->last)
                                            {{ $category->name }}
                                            @else
                                                {{ $category->name . ' - ' }}
                                        @endif
                                    @endforeach    
                                </td>
                                <td><span class="badge badge-{{ $status[$post->status]['class']  }}">{{ $status[$post->status]['label'] }}</span></td>
                                <td>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Chỉnh sửa</a>
                                    <button data-action="{{ route('admin.posts.delete', $post->id) }}" class="btn btn-danger btn-sm js-display-modal-delete">Xoá</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>

        </div>

    </div>
</div>
@stop