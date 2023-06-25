<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileUserController extends Controller
{
    public function accountProfile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('users.profile.profile_account', compact('user'));
    }

    // public function editProfile()
    // {
    //     $user = User::where('id', Auth::user()->id)->first();
    //     return view('users.profile.edit-profile', compact('user'));
    // }

    public function changeProfile(Request $request)
    {
        $request->validate([
            'image_profile' => 'image|mimes:jpg,png,jpeg,svg',
            'name' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'phone' => 'required',
        ]);

        $user = User::find(Auth::user()->id);

        if ($request->hasFile('image_profile')) {
            $image = $request->file('image_profile');
            $imgName = $image->getClientOriginalName() . '.' . $image->extension();

            if (!file_exists(public_path('/assets/img/' . $image->getClientOriginalName()))) {
                $destinationPath = public_path('/assets/img');
                $image->move($destinationPath, $imgName);
                $uploaded = $imgName;
            } else {
                $uploaded = $image->getClientOriginalName();
            }

            $user->image_profile = $uploaded;
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->adress = $request->input('adress');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect('/profile')->with('successUploading', 'Profil berhasil diperbarui');
    }
}
