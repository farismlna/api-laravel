<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Rak;
use App\Models\Pengembalian;
use App\Models\Petugas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            "kode_anggota"  => '123123123',
            "nama_anggota" => 'Faris Maulana',
            "jenis_kelamin" => 'L',
            "jurusan_anggota" => 'RPL',
            "no_telp" => '088901154465',
            "alamat"  =>'Jl Ranco'
        ]);

        Anggota::create([
            "kode_anggota"  => '456456456',
            "nama_anggota" => 'Al Ba I',
            "jenis_kelamin" => 'L',
            "jurusan_anggota" => 'MM',
            "no_telp" => '021123456788',
            "alamat"  =>'Jl Jalan'
        ]);

        Petugas::create([
            "nama_petugas" => 'Rehang',
            "jabatan_petugas" => 'Kang Kebon',
            "no_telp_petugas" => '021234234234',
            "alamat_petugas" => 'jl kejelekan'
        ]);

        Petugas::create([
            "nama_petugas" => 'Yusuf',
            "jabatan_petugas" => 'Administrasi',
            "no_telp_petugas" => '021567567567',
            "alamat_petugas" => 'jl ke'
        ]);
        Petugas::create([
            "nama_petugas" => 'Yunus',
            "jabatan_petugas" => 'Penata Buku',
            "no_telp_petugas" => '021789789789',
            "alamat_petugas" => 'jl kebagusa'
        ]);

        Buku::create([
            "kode_buku" => '11111',
            "judul_buku" => 'Kisah 25 Nabi dan Rasul',
            "Penulis_buku" => 'Andika Cahyadi',
            "penerbit_buku" => 'Gramedia',
            "tahun_penerbit" => '2023',
            "stok" => 32,
        ]);
        Buku::create([
            "kode_buku" => '12345',
            "judul_buku" => 'Mengejar yang Lari',
            "Penulis_buku" => 'Laskar Pendongeng',
            "penerbit_buku" => 'Gramedia',
            "tahun_penerbit" => '2012',
            "stok" => 42
        ]);
        Buku::create([
            "kode_buku" => '67890',
            "judul_buku" => 'Perpindahan Negara Asia',
            "Penulis_buku" => 'Hitler',
            "penerbit_buku" => 'Gramedia',
            "tahun_penerbit" => '2019',
            "stok" => 25
        ]);

        Rak::create([
            "nama_rak" => "Agama",
            "lokasi_rak" => "lt-3",
            "buku_id" => 1,
        ]);
        Rak::create([
            "nama_rak" => "Politik",
            "lokasi_rak" => "lt-2",
            "buku_id" => 3,
        ]);
        Rak::create([
            "nama_rak" => "Motivasi",
            "lokasi_rak" => "lt-1",
            "buku_id" => 2,
        ]);

        Peminjaman::create([
            "tanggal_pinjam" => "2023-10-04",
            "tanggal_kembali" => "2023-10-09",
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 2,
        ]);

        Peminjaman::create([
            "tanggal_pinjam" => "2023-10-03",
            "tanggal_kembali" => "2023-10-08",
            "buku_id" => 2,
            "anggota_id" => 1,
            "petugas_id" => 1,
        ]);

        Peminjaman::create([
            "tanggal_pinjam" => "2023-10-05",
            "tanggal_kembali" => "2023-10-10",
            "buku_id" => 3,
            "anggota_id" => 2,
            "petugas_id" => 3,
        ]);

        Pengembalian::create([
            "tanggal_pengembalian" => "2023-10-11",
            "denda" => 35000,
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1
         ]);

         Pengembalian::create([
           "tanggal_pengembalian" => "2023-10-08",
           "denda" => 0,
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2
        ]);
    }
}
