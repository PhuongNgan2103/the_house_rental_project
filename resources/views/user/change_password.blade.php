@extends('layout.user_page')
@section('title','Đổi mật khẩu')
@section('bodyUserPage')
    <div class="col-md-7 col-lg-8 col-xl-8">
        <div class="page-header bordered">
            <h1>Đổi mật khẩu</h1>
        </div>
        <form action="{{route('changePassword')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Mật khẩu hiện tại</label>
                <input type="password" class="form-control form-control-lg @error('current_password') is-invalid @enderror" name="current_password" minlength="6" maxlength="8" required>
                @error('current_password')
                <span class="invalid-feedback" role="alert">
                                                    <p class="alert alert-info">{{ $message }}</p>
                                                </span>
                @enderror
                @if(Session::has('message_1'))
                    <p class="alert alert-info">{{ Session::get('message_1') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label>Mật khẩu mới</label>
                <input type="password" class="form-control form-control-lg @error('new_password') is-invalid @enderror" name="new_password" minlength="6" maxlength="8" required>
                @error('new_password')
                <span class="invalid-feedback" role="alert">
                                                    <p class="alert alert-info">{{ $message }}</p>
                                                </span>
                @enderror
                @if(Session::has('message_2'))
                    <p class="alert alert-info">{{ Session::get('message_2') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu</label>
                <input type="password" class="form-control form-control-lg @error('password_confirm') is-invalid @enderror" name="password_confirm" minlength="6" maxlength="8" required>
                @error('password_confirm')
                <span class="invalid-feedback" role="alert">
                                                    <p class="alert alert-info">{{ $message }}</p>
                                                </span>
                @enderror
                @if(Session::has('message_3'))
                    <p class="alert alert-info">{{ Session::get('message_3') }}</p>
                @endif
            </div>
            <hr>
            <div class="form-group action">
                <button type="submit" class="btn btn-lg btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@endsection
