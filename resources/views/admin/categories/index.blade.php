@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Danh mục Bài viết</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item active">Danh mục</li>
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
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.create') }}">Thêm mới</a>
                </h3>
                <div class="card-tools">
                    <form action="" method="GET">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <input type="text" value="{{ request()->get('name') }}" name="name" class="form-control float-right" placeholder="Search">
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
                            <th>Tên danh mục</th>
                            <th>Tên danh slug</th>
                            <th>Số lượng trang</th>
                            <th>Tình trạng</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        {{-- {{ dump($category->childrenCategories) }} --}}
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                {{ $category->slug }}
                            </td>
                            <td>{{ $category->count }}</td>
                            <td><span class="badge badge-{{ $status[$category->status]['class']  }}">{{ $status[$category->status]['label'] }}</span></td>
                            <td>
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-info btn-sm">Chỉnh sửa</a>
                                <button data-action="{{ route('admin.categories.delete', $category->id) }}" class="btn btn-danger btn-sm js-display-modal-delete">Xoá</button>
                            </td>
                        </tr>
                            @if (!empty($category->childrenCategories))
                                @include('admin.categories.list-category-nested', [
                                    'childrenCategories' => $category->childrenCategories,
                                    'slas' => '---',
                                ])
                            @endif
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>

    </div>
</div>
@stop