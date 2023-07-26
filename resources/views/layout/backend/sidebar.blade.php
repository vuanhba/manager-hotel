{{-- <div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="{{route('admin.room.index')}}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Phòng</span>
                </a>        
            </li>
            

        </ul>
    </div>
</div>
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="{{route('admin.roomType.index')}}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Loại phòng</span>
                </a>        
            </li>
            

        </ul>
    </div>
</div> --}}


<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="#" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Phòng</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.room.index')}}">Danh sách</a></li>
                    <li><a href="{{route('admin.room.getform')}}">Thêm phòng</a></li>


                </ul>
             

            </li>
            <li><a class="has-arrow " href="{{route('admin.roomType.index')}}" aria-expanded="false">
                <i class="flaticon-025-dashboard"></i>
                <span class="nav-text">Loại phòng</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('admin.roomType.index')}}">Danh sách</a></li>
                <li><a href="{{route('admin.roomType.store')}}">Thêm loại phòng</a></li>
            </ul>
          

        </li>
        {{-- <li><a class="has-arrow " href="{{route('admin.user.index')}}" aria-expanded="false">
            <i class="flaticon-025-dashboard"></i>
            <span class="nav-text">Người dùng</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{route('admin.user.index')}}">Danh sách</a></li>
            <li><a href="{{route('admin.user.store')}}">Thêm người dùng</a></li>
        </ul>
      

    </li> --}}
        
            
     
     
          
        </ul>
        <div class="dropdown header-profile2 ">
            <div class="header-info2 text-center">
                <img src="{{asset('backend/images/profile/pic1.jpg')}}" alt=""/>
                <div class="sidebar-info">
                    <div>
                        <h5 class="font-w500 mb-0">William Johanson</h5>
                        <span class="fs-12">williamjohn@mail.com</span>
                    </div>	
                </div>
                <div>
                    <a href="javascript:void(0);" class="btn btn-md text-secondary">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p class="text-center"><strong>Travl Hotel Admin Dashboard</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12 text-center">Made with <span class="heart"></span> by DexignLab</p>
        </div>
    </div>
</div>