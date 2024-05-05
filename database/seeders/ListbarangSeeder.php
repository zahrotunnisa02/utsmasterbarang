<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListbarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('listbarang')->insert([
            [
                // 'kode_barang' => 'gula',
                'nama_barang' => 'gulaku',
                'harga_barang'=> 15000,
                'deskripsi_barang' => 'gulaku 1 kg',
                'satuan_id' => 1
            ],
            [
                // 'kode_barang' => 'beras',
                'nama_barang' => 'beras pandan wangi',
                'harga_barang'=> 70000,
                'deskripsi_barang' => 'beras 5 liter merk indomert',
                'satuan_id' => 2
            ],
            [
                // 'kode_barang' => 'mie',
                'nama_barang' => 'indomie',
                'harga_barang'=> 60000,
                'deskripsi_barang' => 'indomie 1 kardus',
                'satuan_id' => 3
            ],
            [
                // 'kode_barang' => 'herb',
                'nama_barang' => 'tolakangen',
                'harga_barang'=> 5000,
                'deskripsi_barang' => 'tolakangen 1 sachet',
                'satuan_id' => 4
            ],
        ]);
    }
}
