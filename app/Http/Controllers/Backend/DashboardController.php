<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }


    //memiliki fungsi untuk logout dan menghapus session
    public function destroy(Request $request){
        auth()->logout();
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landing');
    }
}
