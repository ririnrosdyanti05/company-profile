<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View; // Menambahkan use View

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();

        // Pastikan fungsi confirmDelete didefinisikan
        // confirmDelete("Delete", "Are You Sure?"); // Komentari jika belum didefinisikan

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]*$/',
            'email' => 'required|string|email|max:255|unique:users|regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->isAdmin = $request->isAdmin ?? 0; // Berikan default jika isAdmin tidak diisi
        $user->save();

        Alert::success('Success', 'Data Berhasil di simpan')->autoClose(1000);
        return redirect()->route('user.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]*$/',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id . '|regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/',
            'password' => 'nullable|min:8', // Gunakan nullable agar tidak wajib mengubah password
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->isAdmin = $request->isAdmin ?? $user->isAdmin;
        $user->save();

        Alert::success('Success', 'Data berhasil diperbarui')->autoClose(1000);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        toast('Data berhasil dihapus', 'success')->autoClose(1000);
        return redirect()->route('user.index');
    }
}
