<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelProduk;

class Home extends Controller
{

    protected $ModelProduk;

    public function __construct(ModelProduk $ModelProduk)
    {
        $this->ModelProduk = $ModelProduk;
    }

    public function beranda() {
        $allProduk = $this->ModelProduk->getAllProduk();
        
        $data = [
            'allProduk' => $allProduk
        ];
        return view('beranda', $data);
    }
}
