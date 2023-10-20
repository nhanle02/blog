@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Quản lý bình luận</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.comments.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item active">Danh sách</li>
    </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới</h3>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('admin.comments.update', $comment->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="post_id">Tên bài viết</label>
                        <select name="post_id" id="" class="form-control">
                            @foreach ($posts as $post)
                                
                                <option {{ old('post_id') == $post->id ? 'selected' : '' }} value="{{ $post->id }}">{{ $post->title }}</option>
                            @endforeach
                        </select>
                        @error('post_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" style="display: none;" value="2" name="user_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Comment_id</label>
                        <select name="comment_id" id="" class="form-control">
                            <option value="">Không có</option>
                            @foreach ($comments as $com)
                                @if ($com->id == $comment->id)
                                    @continue
                                    @else
                                        <option {{ old('comment_id', $com->id) == $comment->comment_id ? 'selected' : '' }} value="{{ $com->id }}">{{ $com->id }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @error('comment_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="content">Mô tả</label>
                        <textarea class="form-control" name="content" id="content">{{ old('content', $comment->content) }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" {{ $comment->status == '1' ? 'checked' : 'ss' }} name="status" class="custom-control-input" id="status">
                            <label class="custom-control-label" for="status">Trạng thái</label>
                        </div>
                    </div>
                </div>
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="{{ route('admin.comments.index') }}">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
@section('summernote')
<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
</script>
@stop