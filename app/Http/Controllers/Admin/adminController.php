<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class AdminController extends Controller
{
    public function index()
    {
        if(session('authenticated'))
        {
            return redirect()->route('view_data');
        }
        return view("index");
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'pass' => 'required',
        ]);

        $admin = Admins::where('user_name', '=', $request->user)->first();
        if (!$admin) {
            return redirect()->back()->with(["error" => "User not found"]);
        } else {
            if ($request->pass!=$admin->password) {
                return redirect()->back()->with(["error" => "Incorrect password"]);
            }
        }

        session(['authenticated' => true]);
        return redirect()->route('view_data');
    }

    public function logout()
    {
        session()->forget('authenticated');

        return redirect()->route('index');
    }
}
