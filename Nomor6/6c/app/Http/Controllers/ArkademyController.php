<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cashier;
use App\Category;
use App\Product;

class ArkademyController extends Controller
{
    public function index ()
    {
        $product = Product::all();
        $cashier = Cashier::all();
        $category = Category::all();
    	$product_list = Product::all();
    	return view('arkademy.index', compact('product', 'cashier', 'category','product_list'));
    }
	
	
	public function create()
    {
        $product = Product::all();
        $cashier = Cashier::all();
        $category = Category::all();
        return view('arkademy.create', compact('product', 'cashier', 'category'));
    }
	

	public function edit($id)
    {
        $product_list = Product::find($id);
        return view('arkademy.edit', compact('product_list'));
    }
    

    public function destroy($id)
    {
        $product_list = Product::find($id)->delete();
        return redirect()->back()->with('alert-success', 'Berhasil Hapus Data');
    }

    public function store()
    {

    }
}
