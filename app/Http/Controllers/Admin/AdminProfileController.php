<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function View()
    {
        $adminData = Admin::find(1);
        return view('admin.profile.view-profile', compact('adminData'));
    }
    function Edit()
    {
        $editData = Admin::find(1);
        return view('admin.profile.edit', compact('editData'));
    }
    function Store(Request $request)
    {

        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->city = $request->city;
        $data->desegregation = $request->desegregation;
        $data->address = $request->address;
        if ($request->file('profile')) {
            $file = $request->file('profile');
            @unlink(public_path('uploads/admin_images/' . $data->profile));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/admin_images/'), $filename);
            $data['profile'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.view.profile')->with($notification);
    }

    public function ChangePassword(Request $request)
    {
        $adminData = Admin::find(1);
        return view('admin.profile.change-password', compact('adminData'));
    }
    public function updatePassword(Request $request)
    {

        $adminData = Admin::find(1); // Assuming you are fetching the admin with ID 1

        $oldPass = $request->old_password;

        if (Hash::check($oldPass, $adminData->password)) {
            // Old password matches, update the password
            $adminData->password = Hash::make($request->new_password);
            $adminData->save();

            // Add Toastr notification for successful password update
            $notification = [
                'message' => 'Password Updated Successfully',
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.view.profile')->with($notification);
        } else {
            // Old password doesn't match, show error message
            $notification = [
                'message' => 'Old Password Does Not Match',
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
        }
    }
}
