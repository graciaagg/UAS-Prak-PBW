<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user(){
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }

    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $user = User::where('nama_user', 'like', '%'.$cari.'%')->paginate();
        return view('user', ['user' => $user]);
    }

    public function adduser(Request $request)
    {
       return view('adduser');
    }

    public function simpanuser(Request $request)
    {
        /*$request->validate([
            'nik_user' => 'required',
            'nama_user' => 'required',
            'no_hp' => 'required|digits:12',
            'password' => 'required',
        ]);*/
        $user = User::create([
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password)
        ]);
        /*$user = User::where('nik_user', $request->nik_user)
        ->where('nama_user', $request->nama_user)
        ->where('no_hp', $request->no_hp)
        ->where('password',md5($request->password))
        ->first();
        Auth::login($user);*/
       return redirect('/user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edituser', ['user'=> $user]);
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user -> nik_user = $request -> nik_user;
        $user -> nama_user = $request -> nama_user;
        $user -> no_hp = $request -> no_hp;
        $user->save();
        return redirect('/user');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }

    public function login(Request $request)
    {
       return view('login');
    }

    public function ceklogin(Request $request)
    {
        /*$validatedData = $request->validate([
            'no_hp' => ['required', 'digits'],
            'password' => ['required'],
        ]);*/
        if(!Auth::attempt(['no_hp' => $request->no_hp, 'password' => $request->password]))
        {
            return redirect('/login');
        }
        else{
            
            return redirect('/dosen');
        }
        
    }

    public function logout()
    {
       Auth::logout();
       //return view('login');
       return redirect('/user/login')->with('flash', 'Anda Berhasil Keluar');
    }

}
