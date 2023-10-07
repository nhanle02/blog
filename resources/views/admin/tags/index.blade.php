@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Danh sách thẻ</h1>
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
            <span class="alert alert-success">{{ session('success') }}</span>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.tags.create') }}">Tạo mới</a>
                </h3>
                <div class="card-tools">
                    <form action="" method="GET">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="name" value="{{ request()->get('name') }}" class="form-control float-right" placeholder="Search">
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
                            <th>Tên thẻ</th>
                            <th>slug</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td><span class="badge badge-{{ $status[$tag->status]['class']  }}">{{ $status[$tag->status]['label'] }}</td>
                                <td>{{ Date('Y-m-d', strtotime($tag->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-info btn-sm">Chỉnh sửa</a>
                                    <button data-action="{{ route('admin.tags.delete', $tag->id) }}" class="btn btn-danger btn-sm js-display-modal-delete">Xoá</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $tags->links() }}
            </div>

        </div>

    </div>
</div>
@stop