<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// wajib
use Illuminate\Support\Facades\DB;

class ModelProduk extends Model
{
    use HasFactory;
    protected $table = 'tb_produk';
    public $timestamps = false;

    public function getAllProduk()
    {
        return $this->all();
    }

   
}
