
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
                                <form method="POST" id="myform" action="{{route('admin.amenities.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tên tiện ích</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control  {{$errors->has('names') ?'is-invalid':''}}" placeholder="Tên tiện ích"  name="names" value="{{old('name')}}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3 row">
                                   
                                        <label class="col-sm-3 col-form-label">Loại gói</label>
                                        <div class="col-sm-9">
                                       
                                        <select class="default-select form-control wide {{$errors->has('name') ?'is-invalid':''}}" name="name" id="inlineFormCustomSelect">
                                            <option selected value="">Chọn loại gói</option>
                                            @foreach ($packages as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                      
                                            @endforeach
                                          
                                        </select>
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                @enderror
                                     
                                    </div>
                                </div> --}}

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
