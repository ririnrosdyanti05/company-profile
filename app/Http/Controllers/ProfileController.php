<?php

namespace App\Http\Controllers;

use App\Models\Profile; // Mengimpor model Profile
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Tampilkan daftar profile.
     */
    public function index()
    {
        // Mengambil semua data profile dari database
        $profiles = Profile::all();
        // Mengembalikan view dan mengirim data profiles ke view
        return view('frontEnd.index', compact('profiles'));
    }

    /**
     * Tampilkan form untuk membuat profile baru.
     */
    public function create()
    {
        // Menampilkan view form untuk membuat profile
        return view('frontEnd.create');
    }

    /**
     * Simpan data profile yang baru.
     */
    public function store(Request $request)
    {
        // Memvalidasi input dari pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        // Membuat profile baru dengan data yang diinput
        Profile::create($request->all());

        // Redirect ke halaman daftar profile setelah berhasil menyimpan
        return redirect()->route('frontEnd.index')->with('success', 'Profile berhasil dibuat!');
    }

    /**
     * Tampilkan detail profile berdasarkan ID.
     */
    public function show($id)
    {
        // Mencari profile berdasarkan ID
        $profile = Profile::findOrFail($id);
        
        // Menampilkan view detail profile
        return view('frontEnd.show', compact('profile'));
    }

    /**
     * Tampilkan form untuk mengedit profile yang sudah ada.
     */
    public function edit($id)
    {
        // Mencari profile berdasarkan ID
        $profile = Profile::findOrFail($id);
        
        // Menampilkan view form edit dengan data profile
        return view('frontEnd.edit', compact('profile'));
    }

    /**
     * Update data profile di database.
     */
    public function update(Request $request, $id)
    {
        // Memvalidasi input dari pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        // Mencari profile berdasarkan ID dan memperbarui datanya
        $profile = Profile::findOrFail($id);
        $profile->update($request->all());

        // Redirect ke halaman detail profile setelah berhasil mengupdate
        return redirect()->route('frontEnd.show', $profile->id)->with('success', 'Profile berhasil diperbarui!');
    }

    /**
     * Hapus profile dari database.
     */
    public function destroy($id)
    {
        // Mencari profile berdasarkan ID dan menghapusnya
        $profile = Profile::findOrFail($id);
        $profile->delete();

        // Redirect ke halaman daftar profile setelah berhasil dihapus
        return redirect()->route('frontEnd.index')->with('success', 'Profile berhasil dihapus!');
    }
}
