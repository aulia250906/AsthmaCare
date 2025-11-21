<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Menampilkan halaman profil
    public function edit()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    // UPDATE PROFIL
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telpon' => 'nullable|string|max:20',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Kalau upload foto baru
        if ($request->hasFile('photo')) {
            // Simpan di storage/app/public/profile_photos
            $path = $request->file('photo')->store('profile_photos', 'public');

            // Simpan path-nya ke database (tanpa 'public/')
            $user->photo = $path;
        }

        // Update data lainnya
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->telpon = $request->telpon;
        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui!');
    }

    // GANTI PASSWORD
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Password lama salah.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password berhasil diperbarui!');
    }
}
