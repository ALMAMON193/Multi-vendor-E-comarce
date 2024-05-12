<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProfileController extends Controller
{
    public function View(){
        $adminData = Admin::find(1);
        return view('admin.profile.view-profile',compact('adminData'));
    }
    function Edit(){
        $editData = Admin::find(1);
        return view('admin.profile.edit',compact('editData'));
    }
    function Store(Request $request){
        // return $request->all();
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images/'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.view.profile')->with($notification);
    }
}
