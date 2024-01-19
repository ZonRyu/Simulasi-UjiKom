<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Register extends Controller
{
    public function registerPage()
    {
        return view('register');
    }

    public function listPage()
    {
        $siswa = User::all();
        return view('list', compact('siswa'));
    }

    public function registerAkun(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'jenis-kelamin' => 'required',
            'jurusan' => 'required',
            'asal-smp' => 'required'
        ]);

        User::create($validateData);
        Alert::toast('Berhasil Registrasi', 'success');
        return redirect('/register-page')->with('success', 'Berhasil Registrasi', 'Silahkan Login');
    }

    
}
