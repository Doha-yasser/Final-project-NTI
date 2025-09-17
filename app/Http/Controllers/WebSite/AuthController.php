<?php

namespace App\Http\Controllers\WebSite;


use App\Models\User;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Notifications\OtpEmailNotification;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('website.auth.login');
    }
    public function signupPage()
    {
        return view('website.auth.signup');
    }
    public function forgetpasswordPage()
    {
        return view('website.auth.forgetpassword');
    }

    public function resetPasswordPage()
    {
        return view('website.auth.reset-password');
    }
    public function forgetpassword(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
        ]);
        $otp = (new Otp)->generate($request->email, 'numeric', 4, 15);
        $user = User::where('email', $request->email)->first();
        $user->notify(new OtpEmailNotification($otp->token));
        $request->session()->put('email', $request->email);
        return view('website.auth.check-otp');
    }
    public function sendOtp(Request $request)
    {
        $isValid = (new Otp)->validate(session('email'), $request->otp);

        if ($isValid->status === true) {
            $request->session()->put('otp_verified', true);
            return redirect()->route('resetPassword.view');
        }

        return back()->withErrors(['error' => 'Invalid OTP']);
    }
    public function login(Request $request)
    {
        $data = $request->validate(
            [
                'email' => ['required', 'email', 'exists:users,email'],
                'password' => ['required']
            ]
        );
        $user = User::where('email', $data['email'])->first();
        if ($user && Hash::check($data['password'], $user->password)) {
            session()->put('user', $user);
            return redirect()->route("home");
        }
        return redirect()->back()->with("error", "Invalid email or password");
    }
    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login.view');
    }

    public function resetPassword(Request $request)
    {


        $data = $request->validate([
            'password' => ['required', 'min:6', 'confirmed']
        ]);
        $user = User::where('email', session('email'))->first();

        $user->password = Hash::make($data['password']);
        $user->save();
        session()->forget('email');
        session()->forget('otp_verified');
        session()->put('user', $user);
        return redirect()->route('home');
    }
    public function signup(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
            'type' => ['required'],
        ]);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        session()->put('user', $user);
        return redirect()->route('home');
    }
}
