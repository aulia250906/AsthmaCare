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
            'role' => 'pengguna', // ✅ role default
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

            $user = Auth::user();

            // ✅ Arahkan sesuai role
            if ($user->role === 'admin') {
                return redirect()->intended('/admin');
            }

            return redirect()->intended('/home')
                ->with('success', 'Selamat datang, Pengguna!');
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
            $googleUser = Socialite::driver('google')->stateless()->user();

            $googlePhoto = $googleUser->avatar_original
                ?? $googleUser->avatar
                ?? ($googleUser->user['picture'] ?? null);

            $user = User::where('google_id', $googleUser->getId())->first();

            if (!$user) {
                $user = User::where('email', $googleUser->getEmail())->first();

                if ($user) {
                    $user->update([
                        'google_id' => $googleUser->getId(),
                        'photo' => $googlePhoto,
                    ]);
                } else {
                    $user = User::create([
                        'name' => $googleUser->getName(),
                        'email' => $googleUser->getEmail(),
                        'username' => explode('@', $googleUser->getEmail())[0], // ✅ perbaikan kecil juga
                        'password' => Hash::make(uniqid('google_')),
                        'google_id' => $googleUser->getId(),
                        'telpon' => null,
                        'photo' => $googlePhoto,
                        'role' => 'pengguna', // ✅ hanya pengguna
                    ]);
                }
            } else {
                if ($googlePhoto && $user->photo !== $googlePhoto) {
                    $user->update(['photo' => $googlePhoto]);
                }
            }

            // Pastikan user Google tetap role pengguna
            if ($user->role !== 'pengguna') {
                $user->update(['role' => 'pengguna']);
            }

            Auth::login($user);

            // ✅ Semua login Google diarahkan ke /home
            return redirect()->intended('/home')
                ->with('success', 'Berhasil login menggunakan akun Google!');

        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            return redirect()->route('login')
                ->with('error', 'Sesi login tidak valid. Silakan coba lagi.');
        } catch (\Exception $e) {
            return redirect()->route('login')
                ->with('error', 'Gagal login dengan Google: ' . $e->getMessage());
        }
    }
}
