<?php

namespace App\Http\Controllers\backend;

use App\Models\Packages;
use App\Models\Amenities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{
    public $title=[];
  
       public function  index(){
           $this->title['title'] ='Gói dịch vụ';
               $packages = Packages::with('amenities')->get();
        //    dd($packages);
           return view('parts.backend.packages.index',$this->title,compact('packages'));
       }

       public function getform(){
        $this->title['title'] ='Thêm gói dịch vụ';
       $amenities = Amenities::select('id','names')->get(); 
        

         return view('parts.backend.packages.add',$this->title,compact('amenities'));
       }

       public function store(Request $request){
        $packages = new Packages();
        $packages->name = $request->input('name');
        $packages->description = $request->input('description');
        $packages->price = $request->input('price');
        $packages->save();

        $amenitiesIds = $request->input('names');

        // Sử dụng phương thức "sync" để đồng bộ hóa bảng liên kết "amenities_packages"
        $packages->amenities()->sync($amenitiesIds);
    
   
        return redirect()->route('admin.packages.index')->with('message', 'Thêm gói thành công');
       }
       public function delete($id){
        Packages::destroy($id);
        return redirect()->route('admin.packages.index')->with('message', 'Xóa gói thành công');
       }
       public function getDataEdit($id){
        $this->title['title'] ='Sửa gói ';

        $packages = Packages::find($id);
        $amenities = Amenities::all();
        return view('parts.backend.packages.edit',compact('packages','amenities'), $this->title);
       }
       public function edit(Request $request,$id){
     

    // Validate input data
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'names' => 'array', // Ensure "names" is an array
    ]);

   
    $package = Packages::find($id);
    if (!$package) {
        return redirect()->back()->with('error', 'Không tìm thấy gói dịch vụ.');
    }

 
    $package->name = $request->input('name');
    $package->description = $request->input('description');
    $package->price = $request->input('price');
    $package->save();

    // Sync amenities
    $amenitiesIds = $request->input('names', []);
    $amenities = Amenities::find($amenitiesIds);
    if (!$amenities) {
        return redirect()->back()->with('error', 'Có lỗi xảy ra.');
    }

    $package->amenities()->sync($amenitiesIds);

    return redirect()->route('admin.packages.index')->with('message', 'Cập nhật gói dịch vụ thành công.');



       }
}
