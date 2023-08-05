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
                            
                                            <a href="{{route('admin.users.getform')}}">
                                                <button type="button" class="btn btn-primary mb-2 btn-add">Thêm người dùng</button>
                                                     </a>
                                                    
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
                                        @foreach ($data as $item)
                                            <tr>
                                             
                                                <td>{{$item->name ? $item->name :'Chưa cập nhật'}}</td>

                                                <td>{{$item->email ? $item->email :'Chưa cập nhật'}}</td>
                                              
                                                <td>{{$item->phone ? $item->phone :'Chưa cập nhật'}}</td>

                                                <td>
                                                
                                                   @if ($item->image_url)
                                                   <img src="{{Storage::url($item->image_url)}}" width="100px" alt="">
                                                   @elseif(empty($item->image_url))
                                                   Chưa cập nhật
                                                   @endif
                                                  
                                                </td>
                                                <td>
                                                    @if ($item->status==1)
                                                        Hoạt động
                                                    @elseif($item->status==0)
                                                        Khóa
                                                @endif
                                            </td>
                                            <td><div class="dropdown dropend">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu">
                                                    {{-- <a class="dropdown-item btn-edit" href="javascript:void(0);" data-id="{{ $room->id }}">Chỉnh Sửa</a> --}}
                                                    <a class="dropdown-item btn-remove" href="{{ route('admin.users.edit',['id'=>$item->id]) }}">Chỉnh Sửa</a>
                                                    <a class="dropdown-item btn-remove" onclick="return confirm('Bạn có chắc muốn người dùng  này?')"href="{{ route('admin.users.delete',['id'=>$item->id]) }}">Xóa</a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
            $(document).ready(function() {
    $('#dataTable').DataTable();
});</script>    
    @include('parts.backend.read')

@endsection
