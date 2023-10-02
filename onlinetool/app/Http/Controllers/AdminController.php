<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Rules\Password;
use Illuminate\Contracts\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\RegistersUsers as RegistersUsersAlias;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Requests\Auth\LoginRequest;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // 登録画面呼び出し
    public function create()
    {
        return view('admin.register');
    }

    // 登録実行
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($admin));

        Auth::guard('admin')->login($admin);

        return redirect()->route('admin.index');
    }

    // ログイン画面呼び出し
    public function showLoginPage()
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.index');
        }

        return back()->withErrors([
            'login' => ['ログインに失敗しました'],
        ]);
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login')->with([
            'logout_msg' => 'ログアウトしました。',
        ]);
    }
}
