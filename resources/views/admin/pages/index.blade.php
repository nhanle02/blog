@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Danh sách trang</h1>
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
                    <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Tạo mới</a>
                </h3>
                <div class="card-tools">
                    <form action="" method="GET">
                        <div class="input-group input-group-sm">
                            <select name="status" id="" class="form-control">
                                <option value="">Tất cả</option>
                                @foreach ($status as $key => $sta)
                                    <option {{ request()->get('status') == $key ? 'selected' : '' }} value="{{ $key }}">{{ $sta['label'] }}</option>
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
                            <th>Tiêu đề</th>
                            <th>Slug</th>
                            <th>Trạng thái</th>
                            <th>Người tạo</th>
                            <th>image</th>
                            <th>Ngày tạo</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>
                                    <span class="badge badge-{{ $status[$page->status]['class'] }}">{{ $status[$page->status]['label'] }}</span>    
                                </td>
                                <td>{{ $page->user->first_name . ' ' . $page->user->last_name }}</td>
                                <td>
                                    @if (!empty($page->image))
                                        <img src="{{ $page->image }}" alt="ảnh page" width="100px" height="100px">
                                        @else
                                            không có ảnh
                                    @endif    
                                </td>
                                <td>{{ $page->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-info btn-sm">Chỉnh sửa</a>
                                    <button data-action="{{ route('admin.pages.delete', $page->id) }}" class="btn btn-danger btn-sm js-display-modal-delete">Xoá</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pages->links() }}
            </div>

        </div>

    </div>
</div>
@stop