<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bookData =Buku::all();
        return response()->json(
            [
                "message" =>"Berhasil Mendapatkan Data",
                "data" =>$bookData
            ],200
        );
    }

    public function create(Request $request)
    {
        $data = Buku::create([
            "kode_buku" => $request->kode_buku,
            "judul_buku" => $request->judul_buku,
            "penulis_buku" => $request->penulis_buku,
            "penerbit_buku" => $request->penerbit_buku,
            "tahun_penerbit" => $request->tahun_penerbit,
            "stok" => $request->stok,
           
        ]);

        if(!$data) return response()->json([
            "message" => "Gagal membuat Buku",
        ],400);
        
        return response()->json([
            "Message" => "Berhasil Membuat Buku",
            "Data" => $data
        ],200);    


    }

    public function update(Request $request, string $id)
    {
        $data = Buku::find($id);
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

    public function destroy(string $id)
    {
        $data = Buku::findOrFail($id);

    
        $after = $data->delete();

        if(!$after) return response()->json([
            "message" => "gagal hapus"
        ],400);

        return response()->json([
            "message" => "Berhasil Hapus data"
        ],200);

    }

    public function show(string $id)
    {
        $data = Buku::find($id);
        if(!$data) return response()->json([
            "message" => "Gagal Show"
        ],400);

        return response()->json([
            "message" => "Berhasil show",
            "data" => $data
        ],200);
    }

}
