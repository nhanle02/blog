@extends('admin.main')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Cài đặt trang</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
        <li class="breadcrumb-item active">Cài đặt</li>
    </ol>
    </div>
</div>
@stop

@section('content')
@if (session('success'))
    <span class="alert alert-success">{{ session('success') }}</span>
    @elseif (session('error'))
        <span class="alert alert-danger">{{ session('error') }}</span>
@endif
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="row flexbox-section">
                <div class="col-md-4">
                    <div class="section-title pl-4 pt-4">
                        <h5>Thông tin chung</h5>
                    </div>
                    <div class="section-description pl-4">
                        <p class="color-note">Cài đặt thông tin trang web</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="site_title">Tiêu đề</label>
                                <input type="text" id="site_title" class="form-control" autocomplete="off" value="{{ old('site_title', $settings['site_title']) }}" name="site_title" placeholder="Enter site title">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Admin</label>
                                <input type="email" class="form-control" autocomplete="off" value="{{ old('email', $settings['email']) }}" name="email" placeholder="your-email@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="date_format">Date format</label>
                                <input type="text" class="form-control" name="date_format" value="{{ old('date_format', $settings['date_format']) }}">
                                <div class="mt-2">
                                    System date format. Default: <code>M d, o</code>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="timezone">Time Zone</label>
                                <select class="form-control select2 select2-hidden-accessible" id="timezone" name="timezone" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="0">None</option>
                                    @foreach ($timezones as $key => $time)
                                        <option value="{{ $time['timezone'] }}" {{ $time['timezone'] == $settings['timezone'] ? 'selected' : '' }} data-select2-id="{{ $key }}">{{ $time['gmt'] . ' - ' . $time['timezone'] }}</option>
                                    @endforeach                                  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" autocomplete="off" value="{{ old('address', $settings['address']) }}" name="address" id="address" placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label for="admin_email">Phone</label>
                                <input type="text" class="form-control" autocomplete="off" value="{{ old('phone', $settings['phone']) }}" name="phone" placeholder="Enter Phone">
                            </div>
                            <div class="form-group">
                                <label for="copyright">Copyright</label>
                                <textarea type="text" cols="30" rows="4" class="form-control" autocomplete="off" name="copyright" id="copyright" placeholder="Enter Copyright">{{ old('copyright', $settings['copyright']) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Category of post display on sidebar for theme</label>
                                <input type="text" class="form-control" autocomplete="off" name="category" id="category" placeholder="laravel" value="{{ old('category', $settings['category']) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row flexbox-section">
                <div class="col-md-4">
                    <div class="section-title pl-4 pt-4">
                        <h5>Logo</h5>
                    </div>
                    <div class="section-description pl-4">
                        <p class="color-note">Cài đặt logo trang web</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group group-file">
                                <label for="logo">Theme logo</label>
                                <div class="custom-file" data-choose-file="Choose file">
                                    <input name="logo" type="file" id="logo">
                                    <label class="custom-file-label" for="logo">
                                        @if (!empty($settings['logo']))
                                            {{ $settings['logo'] }}
                                            @else
                                                Choose file
                                        @endif
                                    </label>
                                </div>
                                <div class="file-preview">
                                    @if ($settings['logo'])
                                        <img src="{{ $settings['logo'] }}" width="100px" height="50px">
                                    @endif
                                    <a href="javascript:void(0)" class="js-remove-file-chosen remove">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group group-file">
                                <label for="favicon">Theme favicon</label>
                                <div class="custom-file" data-choose-file="Choose file">
                                    <input name="favicon" type="file" id="favicon" value="">
                                    <label class="custom-file-label" for="favicon">
                                        @if (!empty($settings['favicon']))
                                            {{ $settings['favicon'] }}
                                            @else
                                                Choose file
                                        @endif
                                    </label>
                                </div>
                                <div class="file-preview">
                                    @if ($settings['favicon'])
                                        <img src="{{ $settings['favicon'] }}" width="200px" height="100px">
                                    @endif
                                    <a href="javascript:void(0)" class="js-remove-file-chosen remove">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row flexbox-section">
                <div class="col-md-4">
                    <div class="section-title pl-4 pt-4">
                        <h5>Mạng xã hội</h5>
                    </div>
                    <div class="section-description pl-4">
                        <p class="color-note">Cài đặt thông tin mạng xã hội</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" autocomplete="off" value="{{ old('facebook', $settings['facebook']) }}" name="facebook" id="facebook" placeholder="Enter Facebook">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" autocomplete="off" value="{{ old('twitter', $settings['twitter']) }}" name="twitter" id="twitter" placeholder="Enter Twitter">
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" autocomplete="off" value="{{ old('instagram', $settings['instagram']) }}" name="instagram" id="instagram" placeholder="Enter Instagram">
                            </div>
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input type="text" class="form-control" autocomplete="off" value="{{ old('youtube', $settings['youtube']) }}" name="youtube" id="youtube" placeholder="Enter Youtube">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        
                    </h3>
                </div>
                <div class="card-body">
                    <button name="submit" type="submit" value="save" class="btn btn-info btn-sm"><i class="far fa-save" style="margin-right: 5px;"></i>Save</button>                    
                </div>
            </div>
        </div>
    </div>
</form>
@stop