<?php
namespace App\Http\Controllers;

use App\Models\Guests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class GuestsController extends Controller
{
    public function showLoginForm()
    {
        return view('guest.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::guard('guest')->attempt($request->only('email', 'password'))) {
        return redirect()->intended(route('main'));
    }

    throw ValidationException::withMessages([
        'email' => [trans('auth.failed')],
    ]);
}


    public function showRegistrationForm()
    {
        return view('guests.register');
    }

    public function register(Request $request)
{
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:guests',
            'passport_number' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'birth_date' => 'required|date',
            'gender' => 'required|in:male,female,other',
    ]);

    $data = $request->only('name', 'phone', 'email', 'passport_number', 'password', 'birth_date', 'gender');

    $data['password']=Hash::make($data['password']);

    $guest = Guests::create($data);
    
    Auth::guard('guest')->login($guest);

    return redirect()->route('main');
}


    public function logout(Request $request)
    {
        Auth::guard('guest')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
