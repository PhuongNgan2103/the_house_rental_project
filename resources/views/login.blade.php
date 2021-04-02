@extends('layout.master')
@section('title') Đăng nhập @endsection
@section('body')
    <body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" style="margin-top: 0px;">
    <div id="main">
        @include('layout.core.navbar')
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-12 col-lg-10 col-xl-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="{{ route('auth.login') }}">Đăng nhập</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="page-header">
                        <h1>Vui lòng đăng nhập</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center align-items-center">
                    <div class="col col-md-6  col-lg-5 col-xl-4">
                        <ul class="nav nav-tabs tab-lg" role="tablist">
                            <li role="presentation" class="nav-item">
                                <a class="nav-link active" href="{{route('auth.login')}}">Đăng nhập</a></li>
                            <li role="presentation" class="nav-item">
                                <a class="nav-link" href="{{route('auth.register')}}">Đăng ký</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="login">
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    @if (session()->has('message'))
                                        <p class="alert alert-info">{{ session('message') }}</p>
                                    @endif
                                    @if (session()->has('message_1'))
                                        <p class="alert alert-info">{{ session('message_1') }}</p>
                                    @endif
                                    @if(Session::has('message_4'))
                                        <p class="alert alert-info">{{ Session::get('message_4') }}</p>
                                    @endif
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" value="{{ old('username') }}" name="email" id="email" class="form-control form-control-lg @error('username') is-invalid @enderror " required>
                                        @error('username')
                                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password" value="{{ old('password') }}" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required minlength="6" maxlength="32">
                                        @error('password')
                                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{--<p class="text-lg-right"><a href="#">Quên mật khẩu</a></p>--}}
                                    <div class="checkbox">
                                        <input type="checkbox" name="remember_me" id="remember_me" value="{{ old('remember_me') }}">
                                        <label for="remember_me">Ghi nhớ đăng nhập</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Đăng nhập</button>
                                    <div class="socal-login-buttons mt-4">
                                        <a href="{{route('login.google')}}" class="btn btn-social btn-block btn-google">
                                            <i class="icon fa fa-google"></i> Đăng nhập với tài khoản Google</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top" style="visibility: hidden; opacity: 0;"><i
                class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>

    </body>
@endsection
