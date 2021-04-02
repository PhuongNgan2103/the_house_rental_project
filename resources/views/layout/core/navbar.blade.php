<nav class="navbar navbar-expand-lg navbar-dark" id="menu">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span class="icon-uilove icon-uilove-realestate"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-content"
                aria-controls="menu-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu-content">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" role="button" aria-haspopup="true" aria-expanded="false">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('house.list') }}" role="button" aria-haspopup="true" aria-expanded="false">Danh sách nhà cho thuê</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item dropdown user-account">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="user-image" style="background-image:url('{{ asset('/storage/avatars/' . \Illuminate\Support\Facades\Auth::user()->avatar) }}');"></span>
                        {{ \Illuminate\Support\Facades\Auth::user()->username }}
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('user.profile') }}" class="dropdown-item">Tài khoản</a>
                        <a href="{{ route('user.changePassword') }}" class="dropdown-item">Đổi mật khẩu</a>
                        <a href="#" class="dropdown-item">Nhà đăng cho thuê</a>
                        <a href="{{route('evaluate-house')}}" class="dropdown-item">Nhà tôi đã thuê</a>
                        <a href="{{ route('user.myRentalRequest') }}" class="dropdown-item">Các yêu cầu thuê nhà (Đã gửi)</a>
                        <a href="{{ route('user.rentalRequest') }}" class="dropdown-item">Các yêu cầu thuê nhà (Đã nhận)</a>
                        <a href="{{ route('logout') }}" class="dropdown-item">Đăng xuất</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-btn" href="{{ route('house.create') }}">
                        <span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Đăng nhà cho thuê
                        </span>
                    </a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="{{ route('auth.register') }}">
                        <span>
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            Đăng ký
                        </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="{{ route('auth.login') }}">
                        <span>
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            Đăng nhập
                        </span>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
