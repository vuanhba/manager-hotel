{{-- 
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
                    <form method="POST" id="myform" action="{{route('admin.roomType.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tên loại phòng</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control  {{$errors->has('name') ?'is-invalid':''}}" placeholder="Tên loại phòng"  name="name" value="{{old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">
                                {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Ảnh nổi bật</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <img id="mat_truoc" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image"
                                             style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid "/>
                                        <input type="file" name="image"
                                               class="form-control-file {{$errors->has('image') ?'is-invalid':''}}" id="cmt_truoc" value="{{old('image')}}" >
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
                            <label class="col-sm-3 col-form-label">Mô tả</label>
                            <div class="col-sm-9">
                                <textarea class="form-control  {{$errors->has('description') ?'is-invalid':''}}" placeholder="Viết mô tả" name="description" >{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Giá</label>
                            <div class="col-sm-9">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control  {{$errors->has('price_per_night') ?'is-invalid':''}}" name="price_per_night" placeholder="Giá cho một đêm" value="{{old('price_per_night')}}">
                                    @error('price_per_night')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
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

                   --}}











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
                            <form method="POST" id="myform" action="{{route('admin.roomType.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tên loại phòng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  {{$errors->has('name') ?'is-invalid':''}}" placeholder="Tên loại phòng"  name="name" value="{{old('name')}}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Ảnh nổi bật</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <img id="mat_truoc" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image"
                                                     style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid "/>
                                                <input type="file" name="image"
                                                       class="form-control-file {{$errors->has('image') ?'is-invalid':''}}" id="cmt_truoc" value="{{old('image')}}" >
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
                                    <label class="col-sm-3 col-form-label">Mô tả</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control  {{$errors->has('description') ?'is-invalid':''}}" placeholder="Viết mô tả" name="description" >{{ old('description') }}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Giá</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control  {{$errors->has('price_per_night') ?'is-invalid':''}}" name="price_per_night" placeholder="Giá cho một đêm" value="{{old('price_per_night')}}">
                                            @error('price_per_night')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
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
