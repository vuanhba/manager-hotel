
@extends('layout.backend.master')
@section('css')
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/images/favicon.png') }}" />
    <!-- Datatable -->
    <link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('backend/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css')}}">
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
                                <form method="POST" id="myform" action="{{route('admin.packages.edit',['id'=>$packages->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tên gói dịch vụ</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control  {{$errors->has('name') ?'is-invalid':''}}" placeholder="Tên tiện ích"  name="name" value="{{$packages->name?$packages->name:old('name')}}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>

                                      
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Mô tả</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  {{$errors->has('description') ?'is-invalid':''}}" placeholder="Mô tả"  name="description" value="{{$packages->description?$packages->description:old('description')}}">
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
                                    <input type="text" class="form-control  {{$errors->has('price') ?'is-invalid':''}}" placeholder="Giá"  name="price" value="{{$packages->price?$packages->price:old('price')}}">
                                    @error('price')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                             <div class="mb-3 row">
                                   
                                        <label class="col-sm-3 col-form-label">Danh sách tiện ích</label>
                                        <div class="col-sm-9">
                                        <select value="" class="multi-select default-select form-control wide {{$errors->has('names') ?'is-invalid':''}}" name="names[]" multiple="multiple">
                                        
                                            {{-- @foreach ($amenities as $item)
                                            <option value="{{$item->id}}" {{$item->id==$item->id?'selected':''}}>{{$item->names}}</option>
                                            @endforeach --}}
                                            @foreach ($amenities as $item)
                                            <option value="{{ $item->id }}" {{ in_array($item->id, $packages->amenities->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                {{ $item->names }}
                                            </option>
                                        @endforeach
                                         
                                            
                                        </select>
                                        @error('names')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                @enderror
                                     
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
        <script src="{{ asset('backend/vendor/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugins-init/select2-init.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        @include('parts.backend.js')


    @endsection
