<?php

namespace App\Http\Controllers;

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
        return view('tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = $request->validate([
            'namaProduk' => 'required',
            'harga' => 'required|integer',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'descProduk' => 'required',
        ]);

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
        }


        $produk = new Produk();
        $produk->namaProduk = $validator['namaProduk'];
        $produk->harga = $validator['harga'];
        $produk->image = $imageName;
        $produk->descProduk = $validator['descProduk'];
        $produk->save();

        return redirect('produk')->with('success', 'Data berhasil diinput');

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
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    $validator = $request->validate([
        'namaProduk' => 'required',
        'harga' => 'required|integer',
        'descProduk' => 'required',
    ]);

    $produk = Produk::find($id)->update($validator);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('img'), $imageName);
        $produk->image = $imageName;
    }

        $produk->namaProduk = $request->namaProduk;
        $produk->harga = $request->harga;
        $produk->descProduk = $request->descProduk;

        return redirect('produk')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::find($id)->delete();
        return redirect('produk')->with('success', 'Data berhasil dihapus');
    }
}
