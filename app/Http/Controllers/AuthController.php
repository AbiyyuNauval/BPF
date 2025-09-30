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
        if ($request->username == "2455301206"){
            $pageData['pesanSukses'] = "Selamat, anda telah berhasil login!";
            $pageData['username'] = $request->username;
            $pageData['password'] = $request->password;
            return view('login-form', $pageData);
        } else {
            $pageData['pesanError'] = "Username atau Password salah!";
            return view('login-form', $pageData);
        }
    }
}
