<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

//管理者サイトのログイン機能実装用コントローラ

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('adminLogout');
    }
    
    public function adminLogin(Request $request)
    {
        $credentials =$request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if(Auth::guard('admin')->attempt($credentials)){
            if($request->user('admin')?->admin_level > 0) {
                $request->session()->regenerate();
                
                return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
            } else {
                Auth::guard('admin')->logout();
                
                $request->session()->regenerate();
                
                return back()->withErrors([
                    'error' => 'You do not habe permission to log in.',
                ]);
            }
        }
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect('/admin/login');
    }
}
