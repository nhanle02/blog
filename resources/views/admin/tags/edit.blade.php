@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Chỉnh sửa thẻ</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Danh sách thẻ</a></li>
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
                <h3 class="card-title">Chỉnh sửa thẻ</h3>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nhập tên thẻ</label>
                        <input type="text" name="name" value="{{ old('name', $tag->name) }}" class="form-control" id="name" placeholder="Nhập tên thẻ">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="slug">Nhập slug</label>
                        <input type="slug" value="{{ old('slug', $tag->slug) }}" name="slug" class="form-control" id="slug">
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Nhập mổ tả chi tiết">{{ $tag->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="status" {{ $tag->status == '2' ? 'checked' : '' }} class="custom-control-input" id="status">
                            <label class="custom-control-label" for="status">Trạng thái</label>
                        </div>
                    </div>
                </div>
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="{{ route('admin.tags.index') }}">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop