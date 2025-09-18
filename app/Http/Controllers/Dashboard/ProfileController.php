<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('website.dashboard.profile');
    }
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->except('password', 'password_confirmation');

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
        session()->put('user', $user);
        return back()->with('success', 'Profile updated successfully');
    }
    public function changeLang()
    {
        $user = User::find(session('user')->id);
        if($user->lang == 'ar'){
            $lang = 'en';
        }else{
            $lang = 'ar';
        }
        $user->lang = $lang;
        $user->save();
        session()->put('user', $user);
        return redirect()->back();
    }
}
