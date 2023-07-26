

@extends('layout.backend.master')
@section('css')
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/images/favicon.png') }}" />
    <!-- Datatable -->
    <link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('backend/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" 
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{asset('add.css')}}">


@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                   
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" id="myform" action="{{route('admin.room.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Số phòng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  {{$errors->has('room_number') ?'is-invalid':''}}" placeholder="Tên loại phòng"  name="room_number" value="{{old('room_number')}}">
                                        @error('room_number')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                   
                                        <label class="col-sm-3 col-form-label">Loại Phòng</label>
                                        <div class="col-sm-9">
                                       
                                        <select class="default-select form-control wide  {{$errors->has('room_type_id') ?'is-invalid':''}}" name="room_type_id" id="inlineFormCustomSelect">
                                           
                                            <option selected value="">Chọn loại phòng</option>
                                            @foreach ($roomType as $roomType)
                                            <option value="{{$roomType->id}}">{{$roomType->name}}</option>
                                            @endforeach
                                          
                                        </select>
                                        @error('room_type_id')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                   
                                    <label class="col-sm-3 col-form-label">Tình trạng</label>
                                    <div class="col-sm-9">
                                   
                                    <select class="default-select form-control wide {{$errors->has('status') ?'is-invalid':''}}" name="status" id="inlineFormCustomSelect">
                                       
                                        <option selected value="">Chọn tình trạng</option>
                                        
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Khóa</option>
                                        
                                      
                                    </select>
                                    @error('status')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                            @enderror
                                 
                                </div>
                            </div>

                       
                               
                            
                            <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Ảnh nổi bật</label>
                                    <div class="col-sm-9">
                                        <div class="row" id="image-preview">
                                            <div class="col-xs-6"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="image">
                                                <img id="mat_truoc" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image"
                                                     style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid "/>
                                                </div>
                                                <input type="file" name="image"
                                                       class="form-control-file image-input {{$errors->has('image') ?'is-invalid':''}}" id="cmt_truoc" value="1 {{old('image')}}" >
                                                @error('image')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Ảnh Chi tiết</label>
                                    <div class="col-sm-9">
                                        <div class="row" id="images-preview">
                                            <div class="col-xs-6"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="images">
                                                    <img id="mat_truoc" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image"
                                                    style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid "/>
                                                </div>

                                                <input type="file" name="images[]" class="form-control-file image-inputs" value="0" multiple>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                          
                                
                                
                                <div class="mb-3 row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection



</form>

@section('js')


    <script src="{{ asset('backend/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Apex Chart -->
    <script src="{{ asset('backend/vendor/apexchart/apexchart.js') }}"></script>
    <!-- Datatable -->
    <script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>
    <script src="{{ asset('backend/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('backend/js/demo.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @include('parts.backend.js')
    

@endsection
