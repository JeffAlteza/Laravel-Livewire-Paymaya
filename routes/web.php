<?php

use Illuminate\Support\Facades\Route;
use app\Http\Livewire\StudentData;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// Route::get('/main', function () {
//     return view('layout.main');
// });

Route::view('/', 'layout.login')->name('login');

Route::view('/register', 'layout.register');

Route::view('/sidebar', 'layout.sidebar');

Route::group(['middleware' => 'auth'], function () {
    Route::view('/dashboard', 'layout.dashboard');
    Route::view('/main', 'layout.main');
    Route::view('/payment_history', 'layout.payment_history');
});

// for resetting password from email
Route::view('/forgot-password', 'auth.forgot_password')
    ->middleware('guest')
    ->name('password.request');

Route::post('/reset-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');


 
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

