<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilosofiNama;


class FilosofiNamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FilosofiNama::all();
        return view('admin-panel.filosofi.filosofi-nama.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.filosofi.filosofi-nama.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FilosofiNama::create($request->all());

        return redirect()->route('filosofi-nama.index')
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
        $data = FilosofiNama::findOrFail($id);
        return view('admin-panel.filosofi.filosofi-nama.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = FilosofiNama::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('filosofi-nama.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = FilosofiNama::findOrFail($id);
        $data->delete();

        return redirect()->route('filosofi-nama.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
