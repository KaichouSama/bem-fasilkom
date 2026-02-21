<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidang = Bidang::all();
        return view('admin-panel.struktur.bidang.index', compact('bidang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.struktur.bidang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Bidang::create($request->all());

        return redirect()->route('bidang.index')
            ->with('success', 'Bidang berhasil ditambahkan');
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
        $bidang = Bidang::find($id);
        return view('admin-panel.struktur.bidang.edit', compact('bidang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bidang = Bidang::find($id);

        // manual (pemula)
        $bidang->nama_bidang = $request->nama_bidang;
        $bidang->deskripsi_bidang = $request->deskripsi_bidang;
        $bidang->save();

        // cara cepat
        // $bidang->update($request->all());

        return redirect()->route('bidang.index')
            ->with('success', 'Bidang berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bidang = Bidang::find($id);
        $bidang->delete();

        return redirect()->route('bidang.index')
            ->with('success', 'Bidang berhasil dihapus');
    }
}
