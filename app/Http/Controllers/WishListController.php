<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('email', session('user')->email)->first();
        $wishlists = $user->wishlists;
        return view('website.wishlists.index', compact('wishlists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function toggle($id)
    {
        $user = User::where('email', session('user')->email)->first();
        $user->wishlists()->toggle($id);
        return back();
    }
}
