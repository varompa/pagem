<?php

// app/Http/Controllers/PenggunaController.php
namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna
        $penggunas = Pengguna::all();
        return view('pengguna.index', compact('penggunas'));
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'id_pengguna' => 'required|unique:pengguna,id_pengguna',
            'nama_pengguna' => 'required',
            'alamat_pengguna' => 'nullable|string|max:255',
            'no_telepon_pengguna' => 'nullable|string|max:15',
            'email' => 'required|email|max:255|unique:pengguna,email',
            'role' => 'required|string|max:50',
        ]);

        // Simpan pengguna baru
        Pengguna::create($request->all());

        // Redirect kembali ke index dengan pesan sukses
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Tampilkan detail pengguna berdasarkan ID
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.show', compact('pengguna'));
    }

    public function edit($id)
    {
        // Ambil pengguna berdasarkan ID untuk diedit
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama_pengguna' => 'required|string|max:50',
            'alamat_pengguna' => 'nullable|string|max:255',
            'no_telepon_pengguna' => 'nullable|string|max:15',
            'email' => 'required|email|max:255|unique:pengguna,email,' . $id . ',id_pengguna',
            'role' => 'required|string|max:50',
        ]);

        // Ambil pengguna berdasarkan ID dan update datanya
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->update($request->all());

        // Redirect kembali ke index dengan pesan sukses
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus pengguna berdasarkan ID
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();

        // Redirect kembali ke index dengan pesan sukses
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}
