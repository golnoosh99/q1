<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('index', ["product" => $product ]);
    }
    public function new()
    {
        return view('new');
    }
    public function store()
    {
        $product = new Product();
        $product->picture = request('picture');
        $product->name = request('name');
        $product->category = request('category');
        $product->description = request('description');
        $product->save();

        return redirect("/home");
    }
    public function prcdata($id){
        $product =  Product::findOrFail($id);

        return view('index', ["id"=>$id, "product"=> $product]);

    }
    public function update(Request $request, $id)
    {

        $product =  Product::findOrFail($id);
        $product->picture = $request->input('picture');
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->update();
        return redirect ('/home');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect ('/home');
    }

}
