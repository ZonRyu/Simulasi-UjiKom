<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginPage()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginAkun(Request $request)
    {
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            Alert::success('Success','Berhasil login');
            return redirect()->intended('/list-page');
        }

        Alert::error('Error','Login gagal, coba lagi!');
        return back();
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::toast('Anda telah logout!', 'warning');
        return redirect('/login-page');
    }

}
