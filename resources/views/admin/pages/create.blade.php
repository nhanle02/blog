@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Thêm trang mới</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Danh sách</a></li>
        <li class="breadcrumb-item active">Thêm mới</li>
    </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thêm trang mới</h3>
            </div>
            <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Nhập tiêu đề</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="Nhập tiêu đề">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="slug">Nhập slug</label>
                        <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" id="slug" placeholder="Nhập slug">
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Nhập mô tả</label>
                        <textarea class="form-control" name="description" id="description" cols="25" rows="10" placeholder="Nhập mô tả">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Nhập nội dung</label>
                        <textarea class="form-control" name="content" id="content" cols="25" rows="10" placeholder="Nhập nội dung">{{ old('content') }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="status" class="custom-control-input" id="status">
                            <label class="custom-control-label" for="status">Trạng thái</label>
                        </div>
                    </div>
                    {{-- phần người dùng sau khi đăng nhập --}}
                    <div class="form-group">
                        <input type="text" name="create_by" value="1" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label for="image">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
@section('summernote')
<script>
    $(document).ready(function() {
        $('#content').summernote({
          height: 300,
        });
    });
</script>
@stop