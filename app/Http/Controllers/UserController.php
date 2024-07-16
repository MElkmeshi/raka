<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

       $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'phone' => 'required|string',
            'gender' => 'required|in:male,female',
            'user_type' => 'required|in:admin,user',
        ]);

        $data = $request->only([
            'name', 'username', 'email', 'password', 'phone', 'gender', 'user_type'
        ]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('user')->with('success', 'تم إضافة المستخدم بنجاح.');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
     /*   $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|string',
            'gender' => 'required|in:male,female',
            'user_type' => 'required|in:admin,user',
            'status' => 'required|in:active,inactive',
        ]);*/

        $data = $request->only(['name', 'username', 'email', 'phone', 'gender', 'user_type', 'status']);
            $data['password'] = Hash::make($request->password);

        $user->update($data);

        return redirect()->route('user')->with('success', 'تم تحديث بيانات المستخدم بنجاح.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user')->with('success', 'تم حذف المستخدم بنجاح.');
    }
}
