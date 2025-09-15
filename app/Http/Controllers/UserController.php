<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('index');
    }


    public function store(Request $request)
    {
        // dd($request->all());

        // validate request
        $data = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'max:255'],
                'password' => ['required', 'confirmed', 'min:6'],
                'type' => ['required' ]
            ]
        );


        // encyrept password
        // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $data['password'] = bcrypt($data['password']);


        // dd($data);

        // go to database
        $user = User::create($data);


        // return correct msg
        session()->put('email', $data['email']);
        // Auth::login($user);
        return redirect('/home')->with('success', 'User registered successfully!');
    }

    public function read(Request $request, $email)
    {
        $oldMail = $request->get('email');
        if (!$oldMail) {
            return 'User does not exist';
        }
        return redirect('/');
    }


    public function login()
    {
        return view('user.login');
    }
    public function update()
    {
        // $new_pass = $request->passqord;

    }

    public function reset(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('user.reset-password', ['email' => session('email')]);
        }

        $data = $request->validate([
            'password' => ['required', 'min:6', 'confirmed']
        ]);
        $user = User::where('email', session('email'))->first();

        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect('home');

    }


    public function doLogin(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect('user/login');
        }

        $data = $request->validate(
            [
                'email' => ['required', 'string', 'max:255'],
                'password' => ['required', 'min:6']
            ]
        );

        // first  ----> get the firzst row from result
        $user = User::where('email', $data['email'])->first();

        if ($user && Hash::check($data['password'], $user->password)) {
            // ✅ login success → redirect to home
            return redirect('home')->with('success', 'Welcome back, ' . $user->name . '!');
        }

        return '<h1>User does not exist</h1>';
    }



    public function checkMail(Request $request)
    {
        // isMethod to check methold

        if ($request->isMethod('get')) {
            return view('user.check-email');
        }

        $data = $request->validate([
            'email' => ['required', 'string', 'max:255']
        ]);

        $user = User::where('email', $data['email'])->first();
        if ($user) {
            session()->put('email', $user['email']);
            return redirect('user/reset-password');
        }
        return back()->withErrors('This email is not registered');


    }


    public function logout()
    {
        $user = User::where('email', session('email'))->first();

        // $user->delete(); ..... from db
        session()->flush();     // all session only 
        return redirect('/');
    }
}

