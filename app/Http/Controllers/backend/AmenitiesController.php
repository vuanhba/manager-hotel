<?php

namespace App\Http\Controllers\backend;

use App\Models\Packages;
use App\Models\Amenities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AmenitiesController extends Controller
{
    public $title=[];

    public function index(){
        $this->title['title'] =' Danh sách tiện ích';
        $amenities = Amenities::select('id','names')->get();
        return view('parts.backend.amenities.index',compact('amenities'),$this->title);
    }
    public  function getform(){
        $this->title['title'] ='Tiện ích phòng';
        
        $packages = Packages::select('id','name')->get();
        return view('parts.backend.amenities.add',compact('packages'),$this->title);
    }
    public function store(Request $request){
        $request->validate([
            
            'names'=>'required||string|max:255|unique:amenities'
        ]);
    
//    dd($request);
        $amenity = new Amenities();
        $amenity->names = $request->input('names');
        $amenity->save();
    
   
        return redirect()->back()->with('message', 'Thêm tiện ích thành công');

    }
    public function delete($id){
        Amenities::destroy($id); 
        Session::flash('message','xóa thành công tiện ích');
        return back();
    }

    public function getDataEdit($id){
        $this->title['title'] ='Sửa tiện ích';
        $amenity= Amenities::find($id);

        return view('parts.backend.amenities.edit',compact('amenity'),$this->title);
    }
    public function edit(Request $request,$id){
      
        $amenity= Amenities::find($id);
        if (!$amenity) {
            return redirect()->route('admin.amenities.index')->with('error', 'Không tìm thấy tiện ích.');
        }
    
        $params = $request->all();
    
        $result = $amenity->update($params);
    
        if ($result) {
            Session::flash('message', 'Sửa thành công tiện ích.');
            return redirect()->route('admin.amenities.index');
        } else {
            return redirect()->route('admin.amenities.getDataEdit')->with('error', 'Không thể sửa tiện ích.');
        }
    }
}
