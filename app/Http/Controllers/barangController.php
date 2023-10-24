<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangController extends Controller
{
    //
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'jenisBarang' => 'required',
        'kondisiBarang' => 'required',
        'keteranganBarang' => 'required',
        'kecacatanBarang' => 'required',
        'jumlah_barang' => 'required|numeric',
        'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Proses penyimpanan data ke database
    // Simpan gambar jika diunggah
    if ($request->hasFile('gambar')) {
        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);
        // Simpan $imageName ke dalam database
    }

    // Tampilkan pesan sukses
    return redirect()->route('barang.index')->with('success', 'Data barang berhasil disimpan.');
}

}
