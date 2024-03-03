<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class signinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Signin';
        //
        return view('signin.index', compact(
            'title'
        ));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ],[
            'name.required'=>'Nama Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'email.email' => 'Silakan masukan email yang valid',
            'email.unique' => 'email sudah di pergunakan, silakan pilih email yang lain',
            'password.required'=>'Password Wajib DIisi',
            'password.min' => 'Minimum Password yang diizinkan adalah 6 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make( $request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            // kalau otentikasi sukses
            return redirect()->route('car.index')->with(['success' => 'Akun berhasil di buat']);
        }else{
            // kalau otentikasi gagal
            return redirect()->route('login.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
