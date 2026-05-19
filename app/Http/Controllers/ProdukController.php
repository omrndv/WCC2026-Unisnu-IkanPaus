<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk', compact('produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('produk', 'public');
        }

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path
        ]);

        ActivityLog::catat('Menambah Varian Produk', 'Nama: ' . $request->nama);
        return redirect()->back()->with('success', 'Varian baru berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            if ($produk->gambar) {
                Storage::disk('public')->delete($produk->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('produk', 'public');
        }
        $produk->update($data);

        ActivityLog::catat('Memperbarui Varian Produk', 'Nama: ' . $request->nama, 'update');
        return redirect()->back()->with('success', 'Varian berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk->gambar) {
            Storage::disk('public')->delete($produk->gambar);
        }
        $produk->delete();

        ActivityLog::catat('Menghapus Varian Produk', 'ID: ' . $id, 'update');
        return redirect()->back()->with('success', 'Varian berhasil dihapus!');
    }
}
