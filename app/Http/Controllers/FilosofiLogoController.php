<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilosofiLogo;
use Illuminate\Support\Facades\Storage;


class FilosofiLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FilosofiLogo::all();
        return view('admin-panel.filosofi.filosofi-logo.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.filosofi.filosofi-logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gambar_logo')) {
            $path = $request->file('gambar_logo')
                ->store('filosofi_logo', 'public');
        }

        FilosofiLogo::create([
            'nama_logo' => $request->nama_logo,
            'deskripsi_logo' => $request->deskripsi_logo,
            'gambar_logo' => $path
        ]);

        return redirect()->route('filosofi-logo.index')
            ->with('success', 'Data berhasil ditambahkan');
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
        $data = FilosofiLogo::findOrFail($id);
        return view('admin-panel.filosofi.filosofi-logo.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = FilosofiLogo::findOrFail($id);
          if ($request->hasFile('gambar_logo')) {

            // hapus gambar lama
            if ($data->gambar_logo) {
                Storage::disk('public')->delete($data->gambar_logo);
            }

            $path = $request->file('gambar_logo')
                            ->store('filosofi_logo', 'public');

            $data->gambar_logo = $path;
        }

        $data->nama_logo = $request->nama_logo;
        $data->deskripsi_logo = $request->deskripsi_logo;
        $data->save();

        return redirect()->route('filosofi-logo.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = FilosofiLogo::findOrFail($id);

        if ($data->gambar_logo) {
            Storage::disk('public')->delete($data->gambar_logo);
        }

        $data->delete();

        return redirect()->route('filosofi-logo.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
