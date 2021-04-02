@extends('layout.master')
@section('title') Danh sách nhà @endsection
@section('body')
    <body>
    <div id="main">
        @include('layout.core.navbar')
        <div class="clearfix"></div>
        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-12 col-xl-10">
                        <div class="row has-sidebar">
                            <div class="col-md-5 col-lg-4 col-xl-4 col-sidebar">
                                <div id="sidebar" class="sidebar-left">
                                    <div class="sidebar_inner">
                                        <div class="list-group no-border list-unstyled">
                                            <span class="list-group-item heading">Manage Listings</span>
                                            <a href="my_listing_add.html" class="list-group-item"><i class="fa fa-fw fa-plus-square-o"></i> Add Listing</a>
                                            <a href="my_bookmarked_listings.html" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bookmark-o"></i> Bookmarked Listing</span>
                                                <span class="badge badge-primary badge-pill">10</span>
                                            </a>
                                            <a href="my_listings.html" class="list-group-item active d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bars"></i>Danh sách bài đã đăng</span>
                                                <span class="badge badge-primary badge-pill">7</span>
                                            </a>
                                            <span class="list-group-item heading">Manage Account</span>
                                            <a href="my_profile.html" class="list-group-item"><i class="fa fa-fw fa-pencil"></i> My Profile</a>
                                            <a href="my_password.html" class="list-group-item"><i class="fa fa-fw fa-lock"></i> Change Password</a>
                                            <a href="my_notifications.html" class="list-group-item"><i class="fa fa-fw fa-bell-o"></i> Notifications</a>
                                            <a href="my_membership.html" class="list-group-item"><i class="fa fa-fw fa-cubes"></i> Membership</a>
                                            <a href="my_payments.html" class="list-group-item"><i class="fa fa-fw fa-credit-card"></i> Payments</a>
                                            <a href="my_account.html" class="list-group-item"><i class="fa fa-fw fa-cog"></i> Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <div class="page-header bordered">
                                    <h1>Danh sách bài đã đăng</h1>
                                </div>
                                <div class="item-listing list">
                                    @foreach($houses as $house)
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="item-image">
                                                    <a href="{{route('infoPost', $house->id)}}">
                                                        <img src="{{ asset('/storage/images/' . (\Illuminate\Support\Facades\DB::table('house_images')->where('house_id', $house->id)->first())->src) }}" class="img-fluid" alt="">
                                                        <div class="item-badges">
                                                            <div class="item-badge-left">
                                                                @switch($house->status_id)
                                                                    @case(1)
                                                                    <i class="fa fa-check"></i>
                                                                    @break
                                                                    @case(2)
                                                                    <i class="fa fa-user-check"></i>
                                                                    @break
                                                                    @case(3)
                                                                    <i class="fa fa-hammer"></i>
                                                                    @break
                                                                @endswitch
                                                                {{ (\Illuminate\Support\Facades\DB::table('house_statuses')->find($house->status_id))->status }}
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a href="#" class="remove-item"><i class="fa fa-trash-o"></i> Delete</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="item-info">
                                                    <h3 class="item-title">
                                                        <a href="{{route('house.info', $house->id)}}">{{$house->name}}</a>
                                                    </h3>
                                                    <div class="item-location">
                                                        <i class="fas fa-map-marked-alt"></i>
                                                        {{$house->address}}
                                                    </div>
                                                    <div class="item-details-i">
                                                            <span class="bedrooms h5" data-toggle="tooltip" title=""
                                                                  data-original-title="{{$house->numberBedRoom}} phòng ngủ">{{$house->numberBedRoom}}
                                                                <i class="fa fa-bed"></i>
                                                            </span> &nbsp; &nbsp; &nbsp;
                                                        <span class="bathrooms h5" data-toggle="tooltip"
                                                              title=""
                                                              data-original-title="{{$house->numberBathRoom}} phòng tắm">{{$house->numberBathRoom}}
                                                                <i class="fa fa-bath"></i>
                                                            </span>
                                                    </div>
                                                    <div class="item-details">
                                                        <ul>
                                                            <li>Giá phòng <span>{{ number_format($house->pricePerDay, 0, ',', '.') }}<sup>đ</sup> / ngày</span>
                                                            </li>
                                                            <li>Loại
                                                                phòng<span>{{ (\Illuminate\Support\Facades\DB::table('room_types')->find($house->room_type_id))->typeName }}</span>
                                                            </li>
                                                            <li>Ngày
                                                                đăng:<span>{{ date('d/m/Y', strtotime($house->created_at)) }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
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
