<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'stok',
        'minimal_pembelian_product',
        'harga_normal',
        'minimal_pembelian_grosir',
        'harga_grosir',
        'store_id',
        'category_id',
        'grade_id'
    ];
    public function store()
    {
        return $this->hasMany(Store::class, 'id');
    }
    public function category()
    {
        return $this->hasMany(Category::class, 'id');
    }
    public function grade()
    {
        return $this->hasMany(Grade::class, 'id');
    }
}
