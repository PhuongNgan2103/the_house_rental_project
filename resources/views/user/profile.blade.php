@extends('layout.user_page')
@section('title', 'Tài khoản của tôi')
@section('bodyUserPage')
    <div class="col-md-7 col-lg-8 col-xl-8" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
        <div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none;">
            <div class="page-header bordered">
                <h1>Trang cá nhân <small>Quản lý trang cá nhân</small></h1>
            </div>
            @if (session()->has('message_1'))
                <p class="alert alert-info">{{ session('message_1') }}</p>
            @endif
            @if(Session::has('message_2'))
                <p class="alert alert-info">{{ Session::get('message_2') }}</p>
            @endif
            <form method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-5 d-flex">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img src="{{ asset('/storage/avatars/' . \Illuminate\Support\Facades\Auth::user()->avatar) }}" class="rounded-circle" id="wizardPicturePreview" width="150px" title=""/>
                                            <h4>{{ \Illuminate\Support\Facades\Auth::user()->username }}</h4>
                                            <p>{{ \Illuminate\Support\Facades\Auth::user()->phone }}</p>
                                            <p>{{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
                                            <input type="file" id="wizard-picture" name="avatar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 d-flex">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h6 class="mb-0">Họ và tên</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="fullname" value="{{ \Illuminate\Support\Facades\Auth::user()->fullname }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                `       </span>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h6 class="mb-0">Số điện thoại</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ \Illuminate\Support\Facades\Auth::user()->phone }}" minlength="10">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h6 class="mb-0">Địa chỉ</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="address" value="{{ \Illuminate\Support\Facades\Auth::user()->address }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <button type="submit" class="btn btn-lg btn-primary">Cập nhật</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                    <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 644px; height: 1772px;"></div>
                    </div>
                    <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/gsdk-bootstrap-wizard.css') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="{{ asset('assets/js/gsdk-bootstrap-wizard.js') }}"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
@endsection
