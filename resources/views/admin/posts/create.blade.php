@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Tạo mới bài viết</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Bài viết</a></li>
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
                <h3 class="card-title">Tạo mới</h3>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="Nhập tiêu đề">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="slug">Nhập slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Nhập slug">
                                    @error('slug')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Nhập mô tả</label>
                                    <textarea name="description" id="description" name="description" class="form-control" cols="30" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">Nhập nội dung</label>
                                    <textarea name="content" id="content" name="content" class="form-control" cols="30" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Chọn image cho bài viết</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Categories</h3>
                                <div class="card-tools"></div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <ul style="padding: 0;">
                                        @foreach ($categories as $category)
                                            <li class="custom-control custom-checkbox">
                                                <input class="custom-control-input" value="{{ $category->id }}" name="categories[]" type="checkbox" id="category--{{ $category->id }}">
                                                <label for="category--{{ $category->id }}" class="custom-control-label">{{ $category->name }}</label>
                                                @if (!empty($category->childrenCategories))
                                                    @include('admin.posts.list-tag-nested', [
                                                        'childCategories' => $category->childrenCategories,
                                                    ])
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tags</h3>
                                <div class="card-tools"></div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    @foreach ($tags as $tag)
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" value="{{ $tag->id }}" name="tags[]" type="checkbox" id="tag--{{ $tag->id }}">
                                        <label for="tag--{{ $tag->id }}" class="custom-control-label">{{ $tag->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Status</h3>
                                <div class="card-tools"></div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="status" class="custom-control-input" id="status">
                                        <label class="custom-control-label" for="status">Trạng thái</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="comment_status" class="custom-control-input" id="comment_status">
                                        <label class="custom-control-label" for="comment_status">Trạng thái comment</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="is_featured" class="custom-control-input" id="is_featured">
                                        <label class="custom-control-label" for="is_featured">Nổi bật</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-warning">Quay về</a>
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