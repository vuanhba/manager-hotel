<?php

namespace App\Http\Controllers\backend;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\roomTypeRequest;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class RoomTypeController extends Controller
{    public $title=[];
 
    public function  index(){
        $this->title['title'] ='Loại Phòng';
        $selectData = RoomType::select('id','name','description','image','price_per_night')->limit(20)->get();
     


        return view('parts.backend.roomType.index',$this->title,compact('selectData'));
    }

    public function getform(){
        $this->title['title'] ='Thêm loại Phòng';
        return view('parts.backend.roomType.add',$this->title);

    }
public function store(roomTypeRequest $request){

    $params =  $request->except('_token');
        if($request->hasFile('image')&& $request->file('image')->isValid()){
            $params['image'] = uploadFile('photo',$request->image);

        }
    $data = RoomType::create($params);
    if($data->id){
      

        return redirect()->route('admin.roomType.index')->with('message','Thêm Phòng thành công');
    }
}
public function softdelete($id){
    RoomType::find($id)->delete();
    return back();

}
public function trashed(){
    $this->title['title'] ='Thùng Rác';
    $data = RoomType::onlyTrashed()->get();
    return view('parts.backend.roomType.trashed',$this->title,compact('data'));
}
public function restore($id){
    RoomType::whereId($id)->restore();
    return back();
}
public function delete($id){ 
  
   $data = roomType::withTrashed()->findOrFail($id);
   if(!empty($data)){
    $data->forceDelete();
   }
   return back();
}
public function getDataEdit($id){
  
    $this->title['title'] ='Cập nhật loại phòng';
         $data=roomType::find($id);
        
       return view('parts.backend.roomType.edit',$this->title,compact('data'));
       
}

public function  edit(roomTypeRequest $request,$id) {

    $this->title['title'] ='Cập nhật loại phòng';
    $data=roomType::find($id);
    // dd($data);
    $params=$request->except('_token');
     
    if($request->hasFile('image')&& $request->file('image')->isValid()){
        //xoa anh cu
        $resultDl = Storage::delete('/public/'.$data->image);
        if($resultDl){
            $params['image']=uploadFile('photo',$request->file('image'));
        
        }
    
    } else{
        $params['image']= $data->image;
    }
    $result=$data->update($params);
    if ($result) {
        Session::flash('message','sửa  thành công sinh viên');
        return redirect()->route('admin.roomType.edit',['id'=>$id]);
    }
   
    return view('parts.backend.roomType.edit',$this->title,compact('data'));
}
}
