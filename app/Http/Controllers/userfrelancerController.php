<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_frelancer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class userfrelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('Login_register.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|max:255',
            'username' => 'required|unique:user_frelancers|min:5|max:255',
            'password' => 'required|min:8|max:255|confirmed',
            'email' => 'required|email|unique:user_frelancers',
            'no_telepon' => 'required|unique:user_frelancers|max:16',
            'profesi'=> 'required'

        ]);

        user_frelancer::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'profesi' => $request->profesi
        ]);

        return redirect('/register/showLogin')->with('success', 'Registrasi berhasil');

        //
    }

    public function showLogin()
    {
        return view('Login_register.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']

        ]);

        // dd($credentials);
        $user = user_frelancer::where('email', $request->email)->first();
        
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

        // Check if account is approved
        if (!$user->status) {
            return back()->with('email', 'Your account is not approved yet. Please wait for admin verification.');
        }

        // Login user
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/dashboard/posts');
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

    public function viewDashboardAdmin(){

        $approvedFrelancers = user_frelancer::where('status', true)->get();
        return view('dashboard_admin.main_panel.index', compact('approvedFrelancers'));
    }

    public function viewVerfikasiUser(){
        $userFrelance = user_frelancer::all();
        return view('dashboard_admin.main_panel.verifikasiUser', compact('userFrelance'));
    }

      public function approve($id)
    {
        $freelancer = user_frelancer::find($id);
        $freelancer->update(['status' => true]);
        return redirect()->back()->with('success', 'Account approved');
    }

    public function reject($id)
    {
        $freelancer = user_frelancer::find($id);
        $freelancer->update(['status' => false]);
        return redirect()->back()->with('success', 'Account rejected');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/register/showLogin');
    }
}
