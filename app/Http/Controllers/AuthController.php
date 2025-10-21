<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login-form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function showRegister(){
        return view('register-form');
    }

    public function register(Request $request){
        $request->validate([
            'name' => [
                'required',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
            ],
            'username' => 'required',
            'alamat' => 'required | max:300',
            'tglLahir' => 'required | date',
            'password' => [
                'required',
                'string',
                'min: 5',
                'regex:/[a-z]/',
		        'regex:/[A-Z]/',
                'regex:/[1-9]/',
                'confirmed',
            ],
        ]);

        return redirect()->route('login-form')->with('info', 'Register Berhasil!');
    }

    public function login(Request $request){
        $request->validate([
            'username'  => 'required|max:10',
		    'password' => [
		        'required',
		        'string',
		        'min:3',
		        'regex:/[a-z]/',
		        'regex:/[A-Z]/',
		    ],
        ]);
        if ($request->username == "2455301002"){
            $pageData['pesanSukses'] = "Selamat, anda telah berhasil login!";
            $pageData['username'] = $request->username;
            $pageData['password'] = $request->password;
            return redirect()->to('home')->with('info', 'Berhasil Login!');
        } else {
            $pageData['pesanError'] = "Username atau Password salah!";
            return view('login-form', $pageData);
        }
    }
}
