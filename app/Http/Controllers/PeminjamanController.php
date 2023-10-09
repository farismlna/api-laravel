<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjamData =Peminjaman::all();
        return response()->json(
            [
                "message" =>"Berhasil Mendapatkan Data",
                "data" =>$pinjamData
            ],200
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = Peminjaman::create([
            "kode_buku" => $request->kode_buku,
            "judul_buku" => $request->judul_buku,
            "penulis_buku" => $request->penulis_buku,
            "penerbit_buku" => $request->penerbit_buku,
            "tahun_penerbit" => $request->tahun_penerbit,
            "stok" => $request->stok,
           
        ]);

        if(!$data) return response()->json([
            "message" => "Gagal membuat data",
        ],400);
        
        return response()->json([
            "Message" => "Berhasil Membuat Data",
            "Data" => $data
        ],200);        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Peminjaman::find($id);

        if(!$data) return response()->json([
            "message" => "Gagal Show"
        ],400);

        return response()->json([
            "message" => "Berhasil show",
            "data" => $data
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Peminjaman::find($id);
        $updateData = $data->update([
            "kode_buku" => $request->kode_buku,
            "judul_buku" => $request->judul_buku,
            "penulis_buku" => $request->penulis_buku,
            "penerbit_buku" => $request->penerbit_buku,
            "tahun_penerbit" => $request->tahun_penerbit,
            "stok" => $request->stok,
        ]);

        if(!$updateData) return response()->json([
            "message" => "Gagal Update"
        ],400);

        return response()->json([
            "message" => "Berhasil Update data",
            "data" => $updateData
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Peminjaman::findOrFail($id);

    
        $after = $data->delete();

        if(!$after) return response()->json([
            "message" => "gagal hapus"
        ],400);

        return response()->json([
            "message" => "Berhasil Hapus data"
        ],200); 
    }
}
