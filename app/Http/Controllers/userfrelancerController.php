<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_frelancer as UserFreelancer;

class userfrelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Login_register.register');
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
        $request->validate([
            'nama_lengkap' => 'required|max:255',
            'username' => 'required|unique:user_frelancers|min:5|max:255',
            'password' => 'required|min:8|max:255',
            'email' => 'required|email|unique:user_frelancers',
            'no_telepon' => 'required|unique:user_frelancers',
            'profesi'=> 'required'

        ]);
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
}
