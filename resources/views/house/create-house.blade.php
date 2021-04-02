@extends('layout.user_page')
@section('title', 'Tạo bài đăng cho thuê nhà')
@section('bodyUserPage')
    <div class="col-md-7 col-lg-8 col-xl-8">
        <div class="page-header bordered">
            <h1>Thông tin về ngôi nhà đăng tải <small></small></h1>
        </div>
        <form action="{{route('house.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên ngôi nhà</label>
                <input type="text" name="name" class="form-control form-control-lg" id="name" autofocus>
                @error('name')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Loại phòng</label>
                <div class="feature-list three_cols">
                    @foreach($roomTypes as $type)
                        <div class="radio">
                            <input type="radio" name="room_type_id" id="{{ $type->id }}" value="{{ $type->id }}">
                            <label for="{{ $type->id }}">{{ $type->typeName }}</label>
                        </div>
                    @endforeach
                </div>
                @error('room_type_id')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="autocomplete">Địa chỉ <span></span></label>
                <input type="text" name="address" class="form-control form-control-lg" id="autocomplete">
                @error('address')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="numberBedRoom">Phòng ngủ</label>
                        <select name="numberBedRoom" id="numberBedRoom" class="form-control form-control-lg ui-select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        @error('numberBedRoom')
                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="numberBathRoom">Phòng tắm</label>
                        <select name="numberBathRoom" id="numberBathRoom" class="form-control form-control-lg ui-select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        @error('numberBathRoom')
                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="desc">Mô tả chung</label>
                <textarea id="desc" name="desc" class="form-control form-control-lg text-editor"></textarea>
                @error('desc')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="pricePerDay">Giá một ngày (vnđ)</label>
                <input type="number" name="pricePerDay" class="form-control form-control-lg" id="pricePerDay" required>
                @error('pricePerDay')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Ảnh (<strong id="numberImage">0</strong>)</label>
                <div class="ui-dropzone">
                    <div class="icon"></div>
                    <div>Kéo thả ảnh vào hoặc bấm để chọn</div>
                    <input type="file" name="images[]" class="form-control form-control-lg" id="gallery" multiple>
                </div>
                <table class="table v1" id="listImage">

                </table>
                {{--<ul class="list-group no-border list-unstyled v3" id="listImage">
                </ul>--}}
                @error('images.*')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
                @error('images')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary">Đăng bài</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $('#gallery').on("change", function () {
                let files = $(this)[0].files;
                let fileLength = $(this)[0].files.length;
                $('#numberImage').text(fileLength);

                let listImage = $('#listImage');
                listImage.html('');
                let li;
                for (let i = 0; i < fileLength; i++) {
                    li = '<tr>' + '<th>' + files[i].name + '<th>' + '<td>' + files[i].size + ' bytes' + '</td>' + '</tr>';
                    listImage.append(li);
                }
            });
        })
    </script>
@endsection

