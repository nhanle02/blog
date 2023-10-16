@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Quản lý liên hệ</h1>
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
                <h3 class="card-title"></h3>
                <div class="card-tools">
                    <form action="" method="GET">
                        <div class="input-group input-group-sm">
                            <input type="text" name="email" value="{{ request()->get('email') }}" class="form-control float-right" placeholder="Search">
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
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Tiêu đề</th>
                            <th>Trạng thái</th>
                            <th>Ngày cập nhật</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td><span class="badge badge-{{ $status[$contact->status]['class']  }}">{{ $status[$contact->status]['label'] }}</span></td>
                                <td>{{ date('Y-m-d', $contact->update_at) }}</td>
                                <td>
                                    <a href="{{ route('admin.contacts.feedback', $contact->id) }}" class="btn btn-warning btn-sm">Trả lời</a>
                                    <a href="{{ route('admin.contacts.content', $contact->id) }}" class="btn btn-primary btn-sm">Xem</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $contacts->links() }}
            </div>

        </div>

    </div>
</div>
@stop