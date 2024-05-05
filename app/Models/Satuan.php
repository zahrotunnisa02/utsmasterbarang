<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    protected $table = 'satuan';
    protected $primaryKey = 'kode_satuan'; // Specify the primary key column name

    Public function listbarang()
    {
        // return $this->hasMany(Listbarang::class);
        return $this->hasMany(Listbarang::class, 'kode_satuan', 'satuan_id');
    }
}
