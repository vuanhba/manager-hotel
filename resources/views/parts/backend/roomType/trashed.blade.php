@extends('layout.backend.master')
@section('css')
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/images/favicon.png') }}" />
    <!-- Datatable -->
    <link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('backend/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">




@endsection

@section('content')



    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  id="dataTable" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>Tên loại</th>
                                        <th>Mô Tả</th>
                                        <th>Hình Ảnh</th>
                                        <th>Giá/đêm</th>
                                        <th class="bg-none"></th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $restore )
                                        <tr role="row">
                                            <td>{{$restore->name}}</td>
                                            <td>{{$restore->description}}</td>
                                            <td><img src="{{ $restore->image?''.Storage::url($restore->image):''}}"style="width: 100px"/></td>
                                            <td>{{$restore->price_per_night}}</td>
                                            <td><div class="dropdown dropend">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item btn-remove" href="{{ route('admin.roomType.delete',['id'=>$restore->id]) }}">Xóa </a>

                                                    <a class="dropdown-item btn-remove" href="{{ route('admin.roomType.restore',['id'=>$restore->id]) }}">Khôi Phục</a>
                                                </div>
                                            </div></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>



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

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
        
    </script>

@endsection
