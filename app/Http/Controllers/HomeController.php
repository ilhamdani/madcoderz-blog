<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $avatars = auth()->user()->getMedia('profile')->first();
        $categories = Category::all();
        return view('home', compact('categories'));
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        $user->addMedia($request->avatar)->toMediaCollection('profile');
        return redirect()->back();
    }
}
