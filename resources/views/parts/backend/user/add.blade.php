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
                            <form method="POST" id="myform" action="{{route('admin.users.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tên khách hàng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  {{$errors->has('name') ?'is-invalid':''}}" placeholder="Tên khách hàng"  name="name" value="{{old('name')}}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  {{$errors->has('email') ?'is-invalid':''}}" placeholder="Email"  name="email" value="{{old('email')}}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Mật khẩu</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control  {{$errors->has('password') ?'is-invalid':''}}" placeholder="password"  name="password" value="{{old('password')}}">
                                        @error('password')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  {{$errors->has('phone') ?'is-invalid':''}}" placeholder="phone"  name="phone" value="{{old('phone')}}">
                                        @error('phone')
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
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <img id="mat_truoc" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image"
                                                     style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid "/>
                                                <input type="file" name="image_url"
                                                       class="form-control-file {{$errors->has('image_url') ?'is-invalid':''}}" id="cmt_truoc" value="{{old('image_url')}}" >
                                                @error('image_url')
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
   
    <script>
        $(function(){
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();
        
                    reader.onload = function (e) {
                        $(selector).attr('src', e.target.result);
                    };
        
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#cmt_truoc").change(function () {
                readURL(this, '#mat_truoc');
            });
         
        });
            </script>

@include('parts.backend.mess')
@endsection

