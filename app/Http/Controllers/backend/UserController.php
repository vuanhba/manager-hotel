<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{ public $title=[];
    public function index(){
        $this->title['title'] ='Người dùng';
        return view('parts.backend.user.index',$this->title);
    }

    public function getform(){
        $this->title['title'] =' Thêm người dùng';
        return view('parts.backend.user.add',$this->title);
    }
    public function store(Request $request){
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
}
