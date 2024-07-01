<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product'; 

    protected $fillable = [
        'nama_barang', 'stok'
    ];
}
