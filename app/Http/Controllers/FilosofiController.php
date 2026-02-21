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
        $filosofi->filosofi_nama = $request->filosofi_nama;
        $filosofi->filosofi_logo = $request->filosofi_logo;

        // Kalau ada upload logo baru
        if ($request->hasFile('logo_kabinet')) {

            // Hapus logo_kabinet lama (opsional tapi disarankan)
            if ($filosofi->logo_kabinet) {
                Storage::disk('public')->delete($filosofi->logo_kabinet);
            }

            // Simpan logo_kabinet baru
            $path = $request->file('logo_kabinet')->store('filosofi', 'public');

            // Simpan path ke DB
            $filosofi->logo_kabinet = $path;
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
