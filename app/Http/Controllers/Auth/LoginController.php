<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Guests;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    //     $this->middleware('auth')->only('logout');
    // }
    public function username() {
        return 'username';
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // تحديث تاريخ آخر محاولة تسجيل دخول
        $user->login_try_attempt_date = now();

        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $user->login_try_attempts = 0;

            // تحديث تاريخ ووقت آخر تسجيل دخول ناجح
            $user->last_login_on = now();
            $user->save();

            return redirect()->route('home');
            // return response()->json(['message' => 'Login successful'], 200);
        } else {
            $user->login_try_attempts += 1;
            $user->save();

            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }
    // عرض نموذج تسجيل الدخول للضيوف
    public function showGuestLoginForm()
    {
        return view('auth.guestsLogin'); // اسم النموذج الخاص بالضيوف
    }

    public function guestLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $guest = Guests::where('email', $credentials['email'])->first();

        if (!$guest || !Hash::check($credentials['password'], $guest->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // تسجيل الدخول بنجاح للضيف
        Auth::guard('guests')->login($guest);

        return redirect()->route('main');
    }

    public function logout()
    {
        Auth::logout();
        Auth::guard('guests')->logout(); // تسجيل خروج الضيف
        return redirect()->route('login');
    }
}
