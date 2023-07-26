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
 

@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                   
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" id="myForm" action="{{route('admin.roomType.edit',['id'=>$data->id])}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tên loại phòng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control name {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ $data->name ?? old('name') }}" placeholder="Tên loại phòng" name="name">

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
                                                        <img id="mat_truoc" src="{{ $data->image?''.Storage::url($data->image):''}}" alt="your image"
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
                                        <textarea class="form-control description {{$errors->has('description') ?'is-invalid':''}}"  placeholder="Viết mô tả" name="description" >{{ $data->description ?? old('description') }}</textarea>
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
                                            <input type="text" class="form-control price_per_night {{$errors->has('price_per_night') ?'is-invalid':''}}" value="{{ $data->price_per_night ?? old('price_per_night') }}" name="price_per_night" placeholder="Giá cho một đêm" value="{{old('price_per_night')}}">
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
                                        <button type="submit" class="btn btn-primary">Sign in</button>
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
    {{-- @include('parts.backend.js') --}}
    @include('parts.backend.read')

@endsection
