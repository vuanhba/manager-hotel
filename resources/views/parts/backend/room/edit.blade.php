

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
                            <form method="POST" id="myform" action="{{route('admin.room.edit',['id'=>$room->id])}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Số phòng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  {{$errors->has('room_number') ?'is-invalid':''}}" placeholder="Tên loại phòng"  name="room_number" value="{{ $room->room_number ? $room->room_number : old('room_number') }}">
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
                                       
                                        {{-- <select class="default-select form-control wide" name="room_type_id" id="inlineFormCustomSelect">
                                           
                                            <option selected>Chọn loại phòng</option>
                                            @foreach ($roomType as $type)
                                            <option value="{{$type->id}}" {{$type->id ? $type->id==$room->room_type_id ? 'selected':''}}>{{$type->name}}</option>
                                            @endforeach
                                          
                                        </select> --}}

                                        <select class="default-select form-control wide" name="room_type_id" id="inlineFormCustomSelect">
                                            <option selected disabled>Chọn loại phòng</option>
                                            @foreach ($roomType as $type)
                                                <option value="{{ $type->id }}" {{ $type->id == $room->room_type_id ? 'selected' : '' }}>
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        
                                     
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                   
                                    <label class="col-sm-3 col-form-label">Tình trạng</label>
                                    <div class="col-sm-9">
                                   
                                        <select class="default-select form-control wide" name="status" id="inlineFormCustomSelect">
                                            <option selected disabled>Chọn tình trạng</option>
                                         <option value="1" {{$room->status==1?'selected':''}}>Hoạt động</option>
                                         <option value="0" {{$room->status==0?'selected':''}}>Khóa</option>
                                        </select>
                                        
                                 
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
                                            @if (isset($images[1]))
                                            @foreach ($images[1] as $item)
                                            <div class="image">
                                                <img src="{{Storage::url($item->image)}}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" />
                                            </div>
                                            @endforeach
                                            @endif
                                            <input type="file" name="image" class="form-control-file image-input" id="cmt_truoc" value="1 {{old('image')}}" >
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
                                            @if (isset($images[0]))
                                            @foreach ($images[0] as $item)
                                            <div class="images">
                                                <img src="{{Storage::url($item->image)}}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" />
                                            </div>
                                            @endforeach
                                            @endif
                                            <input type="file" name="images[]" class="form-control-file image-inputs" value="0" multiple>
                                            @error('images')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
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
    @include('parts.backend.js')
    

@endsection
