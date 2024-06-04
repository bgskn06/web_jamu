<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::all();
        return view('produk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama_produk' => 'required',
            'kategori_id' => 'required|integer',
            'harga' => 'required',
            'image' => 'required|max:6000|mimes:jpg'
        ]);

        // dd($validator);

        $validator['image'] = $request->file('image')->store('img');
        Produk::create($validator);
        return redirect('produk')->with('success', 'Produk Berhasil Ditambahkan');
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
        $data = Produk::find($id);
        $kategori = Kategori::all();
        return view('produk.edit', compact('data','kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nama_produk' => 'required',
            'kategori_id' => 'required|integer',
            'harga' => 'required',
            'image' => 'required|max:6000|mimes:jpg'
        ]);
        $validator['image'] = $request->file('image')->store('img');
        Produk::find($id)->update($validator);
        return redirect('produk')->with('success', 'Produk Berhasil DiUpdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::find($id)->delete();
        return redirect('produk')->with('success','Produk berhasil dihapus');
    }
}
