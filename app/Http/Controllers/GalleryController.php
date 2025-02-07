<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Menampilkan semua galeri.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    /**
     * Form tambah gambar.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Simpan gambar ke database dan storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'image_path' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gambar berhasil ditambahkan!');
    }

    /**
     * Hapus gambar dari database dan storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus file dari storage
        Storage::disk('public')->delete($gallery->image_path);

        // Hapus data dari database
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gambar berhasil dihapus!');
    }
}
