<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MyProfileController extends Controller
{
    function index(User $user) {
        return view('admin.my-profile', compact('user'));
    }

    function update(Request $request, User $user) {
        $request->validate([
            'name' => 'required',
            'whatsapp' => 'required',
            'email' => 'required',
            'level' => 'in:user,admin',
            'avatar' => 'nullable',
            'file' => 'required'
            
        ]);
        if ($request->file('file')) {
            File::delete('storage/user/'. $user->avatar);
            $file_name = time() . '-' . $request->file('file')->getClientOriginalName();
            $image = $request->file('file')->storeAs('public/user', $file_name);
            $user->avatar = $file_name;
        }

        if (!isset($request['password']) || $request['password'] != '') {
            $user->password = bcrypt($request['password']);
        } 

        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        
        return redirect()->route('user.index')->with('success', 'User berhasil diubah!');
    }
}
