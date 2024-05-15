<?php

namespace App\Http\Controllers\FrontEnd;


use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
       return view('front-end.home');
    }
    public function Logout(){
    Auth::logout();
        return redirect('login');
    }
    public function Profile(){
       $id =  Auth::user()->id;
       $user = User::find($id);
       return view('front-end.profile.profile-view',compact('user'));
    }
    public function ProfileUpdate(Request $request, $id){
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images/'), $filename);
            
            // Delete old image if exists
            if (!empty($data->image)) {
                @unlink(public_path('upload/user_images/' . $data->image));
            }
            
            $data->image = $filename;
        }
    
        $data->save();
        
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('user.profile')->with($notification);
    }
    // public function ChangePassword(){
    //     return view('front-end.profile.change-password');
    // }
    // public function UpdatePassword(Request $request){
    //     $validateData = $request->validate([
    //         'oldpassword' => 'required',
    //         'newpassword' => 'required|confirmed',
    //     ]);
    
    //     $hashedPassword = Auth::user()->password;
    //     if (Hash::check($request->oldpassword, $hashedPassword)) {
    //         $user = User::find(Auth::id());
    //         $user->password = bcrypt($request->newpassword);
    //         $user->save();
    
    //         $notification = array(
    //             'message' => 'Password Updated Successfully',
    //             'alert-type' => 'success'
    //         );
    
    //         return redirect()->route('dashboard')->with($notification);
    //     } else {
    //         return redirect()->back();
    //     }
    // }
   
    
}
