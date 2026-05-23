<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class PengeluaranController extends Controller
{
    
    public function index()
{
    
    $data_pengeluaran = Pengeluaran::all();

    
    $total_pengeluaran = Pengeluaran::sum('nominal');

    return view('pengeluaran.index', compact(
        'data_pengeluaran',
        'total_pengeluaran'
    ));
}

    
    public function create()
    {
        return view('pengeluaran.create');
    }

    
    public function store(Request $request)
    {
        
       $request->validate([
    'nama_pengeluaran' => 'required|min:3',
    'kategori' => 'required',
    'tanggal_pengeluaran' => 'required|date',
    'nominal' => 'required|numeric',
]);

        
        Pengeluaran::create([
    'nama_pengeluaran' => $request->nama_pengeluaran,
    'kategori' => $request->kategori,
    'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
    'nominal' => $request->nominal,
    'deskripsi' => $request->deskripsi,
]);
        
        return redirect('/pengeluaran')
            ->with('success', 'Data pengeluaran berhasil ditambahkan!');
    }

    
    public function edit($id)
    {
        $pengeluaran = Pengeluaran::find($id);

        return view('pengeluaran.edit', compact('pengeluaran'));
    }

    
    public function update(Request $request, $id)
    {
        
       $request->validate([
    'nama_pengeluaran' => 'required|min:3',
    'kategori' => 'required',
    'tanggal_pengeluaran' => 'required|date',
    'nominal' => 'required|numeric',
]);

        
        $pengeluaran = Pengeluaran::find($id);

        
        $pengeluaran->update([
    'nama_pengeluaran' => $request->nama_pengeluaran,
    'kategori' => $request->kategori,
    'tanggal_pengeluaran' => $request->tanggal_pengeluaran,
    'nominal' => $request->nominal,
    'deskripsi' => $request->deskripsi,
]);

        
        return redirect('/pengeluaran')
            ->with('success', 'Data pengeluaran berhasil diubah!');
    }

    
    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::find($id);

        $pengeluaran->delete();

        return redirect('/pengeluaran')
            ->with('success', 'Data pengeluaran berhasil dihapus!');
    }
}