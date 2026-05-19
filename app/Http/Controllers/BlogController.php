<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();

        return view('admin.blog', compact('blogs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'status' => ['required', 'in:draft,published'],
            'konten' => ['required', 'string'],
            'gambar' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
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

        ActivityLog::catat('Menerbitkan Artikel Blog', 'Judul: ' . $validated['judul']);

        return redirect()
            ->back()
            ->with('success', 'Cerita sudah ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'status' => ['required', 'in:draft,published'],
            'konten' => ['required', 'string'],
            'gambar' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $validated['slug'] = Str::slug($validated['judul']);
        $validated['gambar'] = $blog->gambar;

        if ($request->hasFile('gambar')) {
            if ($blog->gambar) {
                Storage::disk('public')->delete($blog->gambar);
            }

            $validated['gambar'] = $request->file('gambar')->store('blog', 'public');
        }

        $blog->update($validated);

        ActivityLog::catat('Mengubah Artikel Blog', 'Judul: ' . $validated['judul'], 'update');

        return redirect()
            ->back()
            ->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->gambar) {
            Storage::disk('public')->delete($blog->gambar);
        }

        $blog->delete();

        ActivityLog::catat('Menghapus Artikel Blog', 'ID: ' . $id, 'update');

        return redirect()
            ->back()
            ->with('success', 'Artikel berhasil dihapus!');
    }
}