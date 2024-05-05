<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listbarang extends Model
{
    use HasFactory;
    protected $table = 'listbarang';
    protected $primaryKey = 'kode_barang';

    public function satuan()
    {
        // return $this->belongsTo(Satuan::class);
        return $this->belongsTo(Satuan::class, 'satuan_id', 'kode_satuan');
    }
}
