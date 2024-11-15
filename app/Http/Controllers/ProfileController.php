<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $user =  Auth::user();
        return view('landing.userprofile.user', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user =  Auth::user();

        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|unique:users,phone,' . $user->id,
            'role' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);
        $user->name   = $validatedData['name'];
        $user->email  = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->phone = $validatedData['role'];
        $user->phone = $validatedData['image'];

        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }
        if ($request->hasFile('image')) {
            if ($user->image) {
                $oldImagePath = public_path($user->image);

                if (file_exists($oldImagePath)) {
                    @unlink($oldImagePath);}            
                }

                $image      = $request->file('image');
                $imageName  = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/image');
    
                $image->move($destinationPath, $imageName);
                $user->image = 'uploads/image/' . $imageName;
        }

        $user->save();
         return redirect()->back()->with('success', 'Profile updated successfully.'); 
    }
}