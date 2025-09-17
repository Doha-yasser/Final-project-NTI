<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Symfony\Polyfill\Intl\Idn\Resources\unidata\DisallowedRanges;



class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('login_middleware')->except('register', 'store', 'login', 'doLogin');
        $this->middleware('auth_middleware')->only('register', 'store', 'login', 'doLogin');

    }
    public function register()
    {
        return view('user.register');
    }

    public function home()
    {
        return view('dashboard.home.index');
    }

    public function index()
    {
        if (!session()->has('user')) {
            return view('index');
        }
        return redirect()->route('home');
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
                'type' => ['required']
            ]
        );


        // encyrept password
        // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $data['password'] = bcrypt($data['password']);


        // dd($data);

        // go to database
        $user = User::create($data);


        // return correct msg
        session()->put('user', $user);
        
        // Auth::login($user);
        return redirect()->route('home');
    }
    public function read(Request $request, $email){
        $oldMail = $request->get('email');
        if (!$oldMail) {
            return 'User does not exist';
        }
        return redirect('/', compact('oldMail'));
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
            session()->put('user', $user);
            return redirect()->route('home');
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
            session()->put('email', $user->email);
            return redirect('user/reset-password');
        }
        return back()->withErrors('This email is not registered');
    }


    public function logout()
    {
        // $user->delete(); ..... from db
        session()->forget('user');     // all session only 
        return redirect('/');
    }


    public function pageNotFound()
    {
        return view('pageNotFound');
    }



    public function showDashboard()
    {
        if (!session()->has('user')) {
            return redirect()->route('user.login');
        }

        return session('user')->type === 'student' ?
            view('Dashboard.studentDashboard') :
            view('Dashboard.insDashboard');
    }
}
