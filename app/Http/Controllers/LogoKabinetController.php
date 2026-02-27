<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogoKabinet;
use Illuminate\Support\Facades\Storage;


class LogoKabinetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logo = LogoKabinet::firstOrCreate();
        return view('admin-panel.filosofi.logo-kabinet.index', compact('logo'));
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
        $logo = LogoKabinet::findOrFail($id);
        return view('admin-panel.filosofi.logo-kabinet.edit', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $logo = LogoKabinet::findOrFail($id);

        if ($request->hasFile('logo_kabinet')) {

            // hapus lama jika ada
            if ($logo->logo_kabinet) {
                Storage::disk('public')->delete($logo->logo_kabinet);
            }

            // simpan baru
            $path = $request->file('logo_kabinet')
                            ->storeAs('logo_kabinet', 'logo_kabinet.png', 'public');

            $logo->logo_kabinet = $path;
        }

        $logo->save();

        return redirect()->route('logo-kabinet.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
