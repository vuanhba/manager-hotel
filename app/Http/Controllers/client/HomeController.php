<?php

namespace App\Http\Controllers\client;

use App\Models\Room;
use App\Models\Packages;
use App\Models\RoomPack;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $rooms = Room::orderBy('created_at', 'desc')
        ->limit(4)
        ->get();

   
    $image = [];

    foreach ($rooms as $room) {
      
        $featuredImage = DB::table('images')
            ->where('room_id', $room->id)
            ->where('is_featured', 1)
            ->first();

        // Nếu có ảnh nổi bật, thêm phòng và ảnh vào mảng kết quả
        if ($featuredImage) {
            $room->featuredImage = $featuredImage->image;
            $image[] = $room;
        }
    }
    $roomTypeMenu = RoomType::select('id','name')->get();
 
    return view('parts.client.content', compact('image','roomTypeMenu'));
   
}

public function roomList($id){
    $roomTypeMenu = RoomType::select('id','name')->get();
    $roomtype = RoomType::findOrFail($id);
    //lay danh sach phong thuoc loai phong tuong ung
    $rooms = $roomtype->rooms;
    //lay anh cua phong 
    $images = DB::table('rooms')
    ->leftJoin('images', 'rooms.id', '=', 'images.room_id')
    ->select('rooms.*', 'images.image')
    ->where('rooms.room_type_id', $id)
    ->get();
    
  // Lấy danh sách các tiện ích của gói phòng cho các phòng tương ứng
  $roomPacks = RoomPack::whereIn('id_room', $rooms->pluck('id'))->get();

  // Lấy danh sách các gói phòng
  $packages = Packages::with('amenities')->whereIn('id', $roomPacks->pluck('id_package'))->get();



    return view('parts.client.roomlist',compact('roomtype','rooms','roomTypeMenu','images','packages'));

}
public function roomDetails($id){
    $roomTypeMenu = RoomType::select('id','name')->get();
    $roomdetails = Room::find($id);
    $roomtype = $roomdetails->roomtype;
    $rooms = $roomtype->rooms;
    $roomPacks = RoomPack::whereIn('id_room', $rooms->pluck('id'))->get();

    // Lấy danh sách các gói phòng
    $packages = Packages::with('amenities')->whereIn('id', $roomPacks->pluck('id_package'))->get();
  
   
    $images = DB::table('images')
    ->where('room_id', $id)
    ->where('is_featured', 1) // Chỉ lấy những hình ảnh nổi bật
    ->get();
    
  
   
 
    return view('parts.client.roomdetails',compact('roomTypeMenu','roomdetails','images','roomtype','packages'));
}
}
