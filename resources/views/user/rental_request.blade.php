@extends('layout.user_page')
@section('title', 'Danh sách yêu cầu thuê nhà')
@section('bodyUserPage')
    <div class="col-md-7 col-lg-8 col-xl-8">
        <div class="page-header bordered">
            <h1>Các yêu cầu thuê nhà</h1>
        </div>
        <div class="item-listing list">
            @foreach($rentalRequests as $request)
            <div class="item">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item-info">
                            <div class="item-details">
                                <ul>
                                    <li>Yêu cầu bởi <span><a href="{{ route('home') }}">{{ (\Illuminate\Support\Facades\DB::table('users')->where('id', $request->request_user_id)->first())->username }}</a></span></li>
                                    <li>Ngày bắt đầu thuê <span>{{ date('d/m/Y', strtotime($request->startDate)) }}</span></li>
                                    <li>Ngày trả phòng <span>{{ date('d/m/Y', strtotime($request->endDate)) }}</span></li>
                                    <li>Trạng thái <span class="@if($request->status_id == 1) text-info @elseif($request->status_id == 2) text-success @else text-danger @endif ">{{ (\Illuminate\Support\Facades\DB::table('request_statuses')->where('id', $request->status_id)->first())->status }}</span></li>
                                    <li>Ngày yêu cầu <span>{{ date('d/m/Y', strtotime($request->created_at)) }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-md-12">
                                <div class="added-on m-1">
                                    @if(\Illuminate\Support\Facades\Route::currentRouteName() == "user.rentalRequest")
                                        <button class="btn btn-outline-success">Chấp nhận</button>
                                        <button class="btn btn-outline-danger">Từ chối</button>
                                    @else
                                        @if($request->status_id != 4)
                                            <a class="btn btn-outline-danger" href="{{route('rentalRequest.update',$request->id)}}" role="button">Hủy yêu cầu</a>
                                        @error('rentalCancel_' . $request->id)
                                            <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                                        @enderror
                                        @endif
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </nav>
    </div>
@endsection
