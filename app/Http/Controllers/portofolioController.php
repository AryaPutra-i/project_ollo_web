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



        return view('dashboard_frelancer.dashboard_page', [
            'porto' => portofolio::all()
        ]);
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
            'detail_portofolio' => 'required',
            'image' => 'required|image|file|max:10240'
        ]);

        $validatedData['image'] = $request->file('image')->store('post-images');

        portofolio::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'design berhasil terupload');
    }

    /**
     * Display the specified resource.
     */
    public function show($porto)
    {
        $lihat = portofolio::where('id', $porto)
            ->orWhere('slug', $porto)
            ->first();

        if (!$lihat) {
            abort(404, 'Data pengguna tidak ditemukan');
        }
        return view('dashboard_frelancer.posts.show', compact('lihat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($porto)
    {
        $edit_halaman = portofolio::where('id', $porto)
            ->orWhere('slug', $porto)
            ->first();
        
        if (!$edit_halaman) {
            abort(404, 'Data pengguna tidak ditemukan');
        }
        return view('dashboard_frelancer.posts.edit', compact('edit_halaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, portofolio $porto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {


        portofolio::destroy($id);
        return redirect('/dashboard/posts')->with('success', 'design berhasil terhapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(portofolio::class, 'slug', $request->judul_portofolio);
        return response()->json(['slug' => $slug]);
    }
}
