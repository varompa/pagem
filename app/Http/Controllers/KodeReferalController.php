<?php

// app/Http/Controllers/KodeReferalController.php
namespace App\Http\Controllers;

use App\Models\KodeReferal;
use Illuminate\Http\Request;

class KodeReferalController extends Controller
{
    public function index()
    {
        $kode_referals = KodeReferal::all();
        return view('kode_referal.index', compact('kode_referals'));
    }

    public function create()
    {
        return view('kode_referal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kodereferal' => 'required|unique:kode_referal',
            'tanggal_dibuat' => 'required|date'
        ]);

        KodeReferal::create($request->all());
        return redirect()->route('kode_referal.index')->with('success', 'Kode Referal berhasil ditambahkan.');
    }

    public function show($id)
    {
        $kode_referal = KodeReferal::findOrFail($id);
        return view('kode_referal.show', compact('kode_referal'));
    }

    public function edit($id)
    {
        $kode_referal = KodeReferal::findOrFail($id);
        return view('kode_referal.edit', compact('kode_referal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_dibuat' => 'required|date'
        ]);

        $kode_referal = KodeReferal::findOrFail($id);
        $kode_referal->update($request->all());
        return redirect()->route('kode_referal.index')->with('success', 'Kode Referal berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kode_referal = KodeReferal::findOrFail($id);
        $kode_referal->delete();
        return redirect()->route('kode_referal.index')->with('success', 'Kode Referal berhasil dihapus.');
    }
}
