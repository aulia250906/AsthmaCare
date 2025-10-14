<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // =====================
    // LOGIN & REGISTER FORM
    // =====================
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // =====================
    // REGISTER
    // =====================
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'username' => 'required|string|max:50|unique:users',
            'telpon' => 'nullable|string|max:15',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'telpon' => $request->telpon,
        ]);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat, silakan login!');
    }

    // =====================
    // LOGIN MANUAL
    // =====================
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // =====================
    // LOGOUT
    // =====================
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    // =====================
    // LOGIN WITH GOOGLE
    // =====================
    public function redirectToGoogle()
    {
        return Socialite::driver('google')
            ->with(['prompt' => 'select_account'])
            ->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // Ambil data user dari Google
            $googleUser = Socialite::driver('google')->user();

            // Coba cari user berdasarkan google_id
            $user = User::where('google_id', $googleUser->getId())->first();

            // Jika belum ada user dengan google_id ini
            if (!$user) {
                // Cek apakah emailnya sudah terdaftar
                $user = User::where('email', $googleUser->getEmail())->first();

                if ($user) {
                    // Update google_id jika email sudah ada
                    $user->update([
                        'google_id' => $googleUser->getId(),
                    ]);
                } else {
                    // Buat user baru
                    $user = User::create([
                        'name' => $googleUser->getName(),
                        'email' => $googleUser->getEmail(),
                        'google_id' => $googleUser->getId(),
                        'username' => explode('@', $googleUser->getEmail())[0], // ✅ FIXED
                        'password' => Hash::make(uniqid('google_')),
                        'telpon' => null,
                    ]);
                }
            }

            // Login user
            Auth::login($user);

            return redirect()->intended('/home');
        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            // Biasanya error ini muncul karena masalah session
            return redirect()->route('login')->with('error', 'Gagal login (session error), coba lagi.');
        } catch (\Exception $e) {
            // Tangani error umum
            return redirect()->route('login')->with('error', 'Gagal login dengan Google: ' . $e->getMessage());
        }
    }
}
