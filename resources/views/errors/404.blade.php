@extends('layout.master')
@section('title', 'Trang không tồn tại!')
@section('body')
    <body>
    <div id="main">
        @include('layout.core.navbar')
        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-8">
                        <div class="error-template text-center"> <i class="fa fa-exclamation-triangle fa-5x text-danger animated zoomIn mb50"></i>
                            <h3 class="main-title"><span>Úi! Lỗi 404</span></h3>
                            <div class="main-title-description"> Xin lỗi, trang này không tồn tại ! </div>
                            <div class="error-actions"> <a href="{{ route('home') }}" class="btn btn-primary btn-lg ml-2 mr-2 mb-3">Quay về trang chủ </a> <a href="#" class="btn btn-light btn-lg ml-2 mr-2 mb-3">Liên hệ hỗ trợ </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>
    </body>
@endsection
