<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog', compact('blogs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('blog', 'public');
        }

        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul), // Otomatis jadi 'judul-artikel-lo'
            'kategori' => $request->kategori,
            'status' => $request->status,
            'konten' => $request->konten,
            'gambar' => $path,
            'penulis' => 'Admin Asri' // Bisa lo ganti pake Auth::user()->name nanti
        ]);

        ActivityLog::catat('Menerbitkan Artikel Blog', 'Judul: ' . $request->judul);
        return redirect()->back()->with('success', 'Cerita sudah ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = $blog->gambar; // Simpan path gambar lama terlebih dahulu
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada gambar baru yang diunggah
            if ($blog->gambar) {
                Storage::disk('public')->delete($blog->gambar);
            }
            $path = $request->file('gambar')->store('blog', 'public');
        }

        $blog->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'kategori' => $request->kategori,
            'status' => $request->status,
            'konten' => $request->konten,
            'gambar' => $path,
        ]);

        ActivityLog::catat('Mengubah Artikel Blog', 'Judul: ' . $request->judul, 'update');
        return redirect()->back()->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->gambar) {
            Storage::disk('public')->delete($blog->gambar);
        }
        $blog->delete();

        ActivityLog::catat('Menghapus Artikel Blog', 'ID: ' . $id, 'update');
        return redirect()->back()->with('success', 'Artikel berhasil dihapus!');
    }
}
