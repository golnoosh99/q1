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
        $student->category = $request->input('category');
        $student->Description = $request->input('Description');
        $student->update();
        return redirect ('/home');
    }

}
