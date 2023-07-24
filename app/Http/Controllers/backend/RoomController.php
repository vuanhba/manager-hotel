<?php

namespace App\Http\Controllers\backend;

use App\Models\Room;
use App\Models\Image;
use App\Models\RoomType;
use Illuminate\Http\Request;
// use App\Http\Requests\roomRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\roomRequest;
use App\Http\Requests\roomTypeRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class RoomController extends Controller
{    public $title = [];
    public function index(){
    //    $data=Room::select('id','room_number','room_type_id','status')->get();
    $rooms = DB::table('rooms as r')
    ->join('room_type as rt', 'r.room_type_id', '=', 'rt.id')
    ->select(
        'r.*',
        'rt.name as roomTypeName',
        'rt.image as roomTypeImage',
        'rt.price_per_night as roomTypePrice',
    )
    ->limit(20)
    ->get();
    
        $this->title['title']="Phòng";
        return view('parts.backend.room.index',$this->title,compact('rooms'));
    }


    public function getform(){
        $this->title['title']="Thêm phòng";
        $roomType = RoomType::select('id','name')->get();
        return view('parts.backend.room.add',$this->title,compact('roomType'));
    }

public function store(roomRequest $request) {
    $data = $request->except('_token');
    $room = Room::create([
        'room_number' => $request->room_number,
        'room_type_id' => $request->room_type_id,
        'status' => $request->status,
    ]);

    $images = [];

    if ($request->hasFile('image')) {
        $filePath = uploadFile('photo', $request->file('image'));
        $images[] = [
            'room_id' => $room->id,
            'image' => $filePath,
            'is_featured' => 1,
        ];
    }

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $imageFile) {
        $filePath = uploadFile('photo', $imageFile);
        $images[] = [
            'room_id' => $room->id,
            'image' => $filePath,
            'is_featured' => 0,
        ];
    }
}

    Image::insert($images);

    if ($room->id) {
        return redirect()->route('admin.room.index')->with('message', 'Thêm Phòng thành công');
    }
}
public function getDataEdit($id){
  
    $this->title['title'] ='Cập nhật loại phòng';
         $room=Room::find($id);
         $roomType=roomType::select('id','name')->get();
        //  $image=Image::select('image','is_featured')->where('room_id',$id)->get();
    
        $images = Image::where('room_id',$id)->whereIn('is_featured', [0, 1])->get()->groupBy('is_featured');

          
       return view('parts.backend.room.edit',$this->title,compact('room','roomType','images'));
       
}
public function edit(Request $request,$id){
    $room = Room::findOrFail($id);
    $dataimages = Image::where('room_id', $room->id)->get();
    $result= $room->update([
        'room_number' => $request->room_number,
        'room_type_id' => $request->room_type_id,
        'status' => $request->status,
    ]);

   

    // Xóa các ảnh cũ từ thư mục Storage
   
    
    if ($request->hasFile('image')) {

        foreach ($dataimages as $dataimage) {
            if($dataimage->is_featured==1) {
            Storage::delete('/public/' . $dataimage->image);
          
        }
          
        }
        $filePath = uploadFile('photo', $request->file('image'));
        Image::updateOrCreate(
            ['room_id' => $room->id, 'is_featured' => 1],
            ['image' => $filePath]
        );
    }
  
    if ($request->hasFile('images')) {
        
        foreach ($dataimages as $dataimage) {
            if($dataimage->is_featured==0) {
            Storage::delete('/public/' . $dataimage->image);
            Image::where('room_id', $room->id)->where('is_featured',0)->delete();
        }
    }
        

        foreach ($request->file('images') as $imageFile) {
            $filePath = uploadFile('photo', $imageFile);
    
            $image = new Image();
            $image->room_id = $room->id;
            $image->image = $filePath;
            $image->is_featured = 0;
            $image->save();
        }
        
    }
    
        if ($result) {
            Session::flash('message','sửa  thành công phòng');
            return redirect()->route('admin.room.edit',['id'=>$id]);
        }

    return view('parts.backend.room.edit',$this->title,compact('id'));
}


public function delete($id){ 
   Room::destroy($id);
   Session::flash('message','xóa thành công phòng');
   return back();
}

}
