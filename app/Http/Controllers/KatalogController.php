<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKatalogRequest;
use App\Http\Requests\UpdateKatalogRequest;
use App\Models\Katalog;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Katalog::all();

        return view('katalog', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(StoreKatalogRequest $request)
    {
        Katalog::create($request->validated());

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function update(UpdateKatalogRequest $request, Katalog $katalog)
    {
        $product = Katalog::findOrFail($request);
        $product->update($request->validated());

        return redirect()->back()->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Katalog::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
