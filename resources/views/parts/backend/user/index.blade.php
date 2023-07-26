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
                        <div class="card-header">
                            <h4 class="card-titles"></h4>
                            
                                             {{-- <div class="lg-3-row"><a href="{{route('admin.user.getform')}}">
                                                <button type="button" class="btn btn-primary mb-2 btn-add">Thêm người dùng</button>
                                                     </a>
                                                     <a href="{{route('admin.user.trashed')}}">
                                                        <button type="button" class="btn btn-primary mb-2 btn-add">Thùng rác</button>
                                                             </a></div> --}}

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  id="dataTable" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr> 
                                        <th>Tên khách hàng</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Hình Ảnh</th>
                                        <th>Trạng thái</th>
                                        <th class="bg-none"></th>


                                    </tr>
                                    </thead>
                                    <tbody>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
            $(document).ready(function() {
    $('#dataTable').DataTable();
});</script>    

@endsection
