<?php

namespace App\Http\Controllers;

use App\Core\Modules\AdminModule\Services\AdminMenuService\AdminMenuService;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login()
    {
        return Inertia::render('Auth/Login', [

        ]);
    }

    public function register()
    {
        return Inertia::render('Auth/Register', [

        ]);
    }

    public function registerPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'name' => ['required'],
        ], [
            'email.email' => 'Email указан с опечаткой',
            'email.required' => 'Email обязателен для заполнения',
            'password.required' => 'Укажите пароль',
            'password.confirmed' => 'Подтвердите пароль',
            'name.required' => 'Укажите ваше имя'
        ]);
        $user = User::create(\request(['name', 'email', 'password']));
        \auth()->login($user);
        return redirect()->to(route('dashboard'));
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.email' => 'Email указан с опечаткой',
            'email.required' => 'Email обязателен для заполнения',
            'password.required' => 'Укажите пароль'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'Данные указаны не верно',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
