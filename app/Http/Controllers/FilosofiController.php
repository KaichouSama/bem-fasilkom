<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filosofi;
use Illuminate\Support\Facades\Storage;


class FilosofiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filosofi = Filosofi::first();
        return view('admin-panel.filosofi.index', compact('filosofi'));
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
        $filosofi = Filosofi::find($id);
        return view('admin-panel.filosofi.edit', compact('filosofi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $filosofi = Filosofi::find($id);

        // Cara manual (lebih disarankan untuk pemula)
        $filosofi->nama_kabinet = $request->nama_kabinet;
        $filosofi->deskripsi1 = $request->deskripsi1;
        $filosofi->deskripsi2 = $request->deskripsi2;

        // Kalau ada upload logo baru
        if ($request->hasFile('logo')) {

            // Hapus logo lama (opsional tapi disarankan)
            if ($filosofi->logo) {
                Storage::disk('public')->delete($filosofi->logo);
            }

            // Simpan logo baru
            $path = $request->file('logo')->store('filosofi', 'public');

            // Simpan path ke DB
            $filosofi->logo = $path;
        }

        $filosofi->save();


        return redirect()->route('filosofi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
