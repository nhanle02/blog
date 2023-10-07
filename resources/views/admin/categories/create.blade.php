@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Tạo mới danh mục</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Danh mục</a></li>
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
                <h3 class="card-title">Tạo danh mục</h3>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nhập tên Danh mục</label>
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control js-handle-name" id="name" placeholder="Nhập tên danh mục">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" style="display: none;"value="{{ old('slug') }}" name="slug" class="form-control js-handle-slug" id="slug" placeholder="Nhập slug">
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="parent">Chọn danh mục</label>
                        <select name="parent" id="parent" class="form-control">
                            <option value="0">Không có danh mục cha</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ !empty(old('parent')) ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Nhập thông tin mô tả</label>
                        <textarea name="description" id="description" class="form-control" rows="3" placeholder="Nhập thông tin mô tả">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="status" class="custom-control-input" id="status">
                            <label class="custom-control-label" for="status">Trạng thái</label>
                        </div>
                    </div>
                </div>
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="{{ route('admin.categories.index') }}">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop