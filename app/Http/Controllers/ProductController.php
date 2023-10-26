<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Grade;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $data = Product::all();

        return view('home', compact('data'));
    }
    public function showProduk()
    {
        $data = Product::all();

        return view('pembeli.produk', compact('data'));
    }
    public function create(Request $req)
    {
        $attr =  $req->validate([
            'kategori' => ['required'],
            'grade' => ['required'],
            'nama_produk' => ['required'],
            'deskripsi' => ['required'],
            'stok' => ['required'],
            'harga_normal' => ['required'],
            'minim_pembelian' => ['required'],
            'harga_grosir' => ['required']
        ]);
        $category = Category::where('nama', $attr['kategori'])->first();
        $grade = Grade::where('nama', $attr['grade'])->first();
        $produk = Product::create([
            'nama' => $attr['nama_produk'],
            'deskripsi' => $attr['deskripsi'],
            'stok' => $attr['stok'],
            'minimal_pembelian_product' => $attr['minim_pembelian'],
            'harga_normal' => $attr['harga_normal'],
            'minimal_pembelian_grosir' => $attr['minim_pembelian'],
            'harga_grosir' => $attr['harga_grosir'],
            'store_id' => 1,
            'category_id' => $category->id,
            'grade_id' => $grade->id
        ]);
        return redirect()->route('seller-add-product');
    }
}
