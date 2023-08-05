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
                            <div class="lg-3-row">
                            <a href="{{route('admin.room.getform')}}">
                                <button type="button" class="btn btn-primary mb-2 btn-add" data-bs-toggle="modal"
                                data-bs-target=".bd-example-modal-lg" >Thêm phòng</button>
                                     </a>

                            </div>
                                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  id="dataTable" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                   
                                        <th colspan="1">Loại phòng</th> 
                                        <th>Số phòng</th>
                                        <th>Gói</th>
                                         <th>Giá</th> 
                                         <th>Mô tả</th>
                                        <th>Tình trạng</th> 
                                        <th class="bg-none"></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                      
                                    


                                        @foreach($rooms as $room)
                                        <tr>
                                            <td>
                                                <img src="{{ $room->roomtype->image ? Storage::url($room->roomtype->image) : '' }}" style="width: 100px" alt="">
                                                {{ $room->roomtype->name }}
                                                {{-- {{ $room->roomtype->price_per_night }} --}}

                                            </td>
                                            <td>{{ $room->room_number }}</td>

                                            @if ($room->packages->count() > 0)
                                                @foreach ($room->packages as $package)
                                                    <td>{{ $package->name}}
                                                        {{-- {{ $package->price }} --}}
                                                    </td>
                                                 

                                                @endforeach
                                            @else
                                                <td colspan="number_of_package_columns">Không có gói nào</td>
                                            @endif
                                            <td>{{  number_format($room->total_price, 0, '.', '.') }} VND</td>
                                            <td>{{$room->description}}</td>
                                            <td>
                                                @if ($room->status == 0)
                                                    Khóa
                                                @elseif ($room->status == 1)
                                                    Hoạt động
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
                                                  
                                                    <a class="dropdown-item btn-edit" href="{{ route('admin.room.edit',['id'=>$room->id]) }}">Chỉnh Sửa</a>
                                                    <a class="dropdown-item btn-remove" onclick="return confirm('bạn có chắc chắn muốn xóa không?')" href="{{ route('admin.room.delete',['id'=>$room->id]) }}">Xóa</a>
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
    @include('parts.backend.room.modal')
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
// $('body').on('click', '.btn-info', function (e) {
//     var id = $(this).attr('data-id');
//     $('#myModal').modal('show');
//     e.preventDefault();

//     $.ajax({
//         url: '/admin/room/detail/' + id,
//         type: 'GET',
//         dataType: 'json',
//         success: function (images) {
       
//             var select = $('#imgs');
            
//             // Xóa các hình ảnh hiện tại trong modal (nếu có)
//             select.empty();

//             // Lặp qua tất cả các hình ảnh trong mảng và thêm chúng vào modal
//             images.forEach(function (image) {
//                 var imageUrl = '{{ asset('storage/') }}' + '/' + image.image;
//                 var imgElement = '<img src="' + imageUrl + '" style="width: 100px" alt="">';
//                 select.append(imgElement);
//             });
//         },
//         error: function (error) {
//             console.log('Error:', error);
//         }
//     });
// });


 
   
 
 





    </script>
    @include('parts.backend.js')
    

@endsection
