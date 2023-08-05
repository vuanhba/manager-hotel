<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{ public $title=[];
    public function index(){
        $this->title['title'] ='Người dùng';
        $data = User::all();
        return view('parts.backend.user.index',$this->title,compact('data'));
    }

    public function getform(){
        $this->title['title'] =' Thêm người dùng';
        return view('parts.backend.user.add',$this->title);
    }
    public function store(UserRequest $request){
       $user= $request->except('_token');
    
       if($request->hasFile('image_url')){
        $user['image_url']=uploadFile('usersPhoto',$request->image_url);

       }else{
        $user['image_url']="";
       }

       $data= User::create($user);
        if($data->id){


            return redirect()->route('admin.users.index')->with('message','Thêm người dùng thành công');
        }
    }
    public function delete($id){

        
        User::destroy($id);
        Session::flash('message','xóa thành công người dùng');
        return back();
        
    }
    public function getDataEdit($id){
        $this->title['title'] =' Sửa người dùng';

        $data = User::find($id);
        return view('parts.backend.user.edit',$this->title,compact('data'));
        
    }
    public function edit( UserRequest $request,$id){
        $user = User::find($id);

        $data = $request->except('_token');
        if($request->hasFile('image_url')&&$request->file('image_url')->isValid()){
        $data['image_url']=uploadFile('usersPhoto',$request->image_url);
        Storage::delete('/public/' . $user->image);


    }else{
        $data['image_url']="";
    }
    // $result=$user->update($data);
    // if($result){
    //     return redirect()->route('admin.users.index')->with('message','Sửa người dùng thành công');
        
    // }
    $user->name= $request->name;
    $user->phone= $request->phone;
    $user->email= $request->email;
    $user->password= $request->password;
    $user->image_url= $request->image_url;
    $user->status= $request->status;
    $result=$user->save();
    if($result){
         return redirect()->route('admin.users.index')->with('message','Sửa người dùng thành công');
            
    }
}
}
