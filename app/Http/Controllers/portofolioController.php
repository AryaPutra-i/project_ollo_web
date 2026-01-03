<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portofolio;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class portofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $porto = portofolio::all();
        return view('dashboard_frelancer.dashboard_page', compact('porto'));
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard_frelancer.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        $validatedData = $request->validate([
            'judul_portofolio' => 'required|max:255',
            'slug' => 'required|unique:portofolios',
            'detail_portofolio' => 'required'
        ]);

        portofolio::create($validatedData);
        return redirect()->route('dashboard.posts.index')->with('success', 'design berhasil terupload');

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

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(portofolio::class, 'slug', $request->judul_portofolio);
        return response()->json(['slug' => $slug]);
    }
}
