<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vimi;


class VimiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vimi = Vimi::first();
        return view('admin-panel.vimi.index', compact('vimi'));
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
        $vimi = Vimi::find($id);
        return view('admin-panel.vimi.edit', compact('vimi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vimi = Vimi::find($id);
        $vimi->visi = $request->visi;
        $vimi->misi = $request->misi;
        $vimi->save();

        return redirect()->route('vimi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
