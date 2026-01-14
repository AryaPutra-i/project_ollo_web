<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portofolio;
use App\Models\user_frelancer;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;


class portofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = Auth::user();
        if ($user->role !== 'frelancer'){
            abort(403, 'hanya frelancer yang bisa mengakses dashboard ini');
        }
        $porto = portofolio::where('frelance_id', $user->frelance_id)->get();
        

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
            'detail_portofolio' => 'required',
            'image' => 'required|image|file|max:10240'
        ]);

        // dd($validatedData);
        $validatedData['image'] = $request->file('image')->store('post-images');
        
        $request->user()->portofolios()->create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'design berhasil terupload');
    }

    /**
     * Display the specified resource.
     */
    public function show($porto)
    {
        $lihat = portofolio::where('id', $porto)
            ->orWhere('slug', $porto)
            ->with('freelancer')
            ->first();


        // Get user with all portfolios
       

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
            ->with('freelancer')
            ->first();

        if (!$edit_halaman) {
            abort(404, 'Data pengguna tidak ditemukan');
        }
        return view('dashboard_frelancer.posts.edit', compact('edit_halaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $porto)
    {
        $update_portofolio = portofolio::where('id', $porto)
            ->orWhere('slug', $porto)
            ->with('freelancer')
            ->first();

        $rules = [
            'judul_portofolio' => 'required|max:255',
            'detail_portofolio' => 'required',
            'image' => 'image|file|max:10240'
        ];

        if ($request->slug != $update_portofolio->slug) {
            $rules['slug'] = 'required|unique:portofolios';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        portofolio::where('id', $update_portofolio->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'design berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $portofolio = portofolio::findOrFail($id);

        // Authorization: Ensure the freelancer owns this portfolio
        if ($portofolio->frelance_id !== Auth::user()->frelance_id) {
            abort(403, 'Unauthorized action.');
        }

        // Delete the image file from storage if it exists
        if ($portofolio->image) {
            Storage::delete($portofolio->image);
        }

        $portofolio->delete();
        return redirect('/dashboard/posts')->with('success', 'design berhasil terhapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(portofolio::class, 'slug', $request->judul_portofolio);
        return response()->json(['slug' => $slug]);
    }

    public function viewWrapper()
    {
        $user = Auth::user();
        
        if ($user->role == 'frelancer'){
            // Filter portofolio berdasarkan frelance_id user yang sedang login
            $porto = portofolio::where('frelance_id', $user->frelance_id)
                               ->with('freelancer')
                               ->get();
            return view('katalog_portofolio.index', compact('porto'));
        }    
    }
}
