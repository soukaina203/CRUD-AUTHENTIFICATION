<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $Products = Product::all();
        return view('first.index', ["prod" => $Products]);
    }


    public function create()
    {
        return view('first.create');
    }

    public function store(Request $request)
    {
        $Products = new Product([
            "title" => $request->input('title'),
            "prix" => $request->input('prix'),

        ]);
        $Products->save();
        return redirect('/')->with('success', 'Personnage Ajouté avec succès');
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('first.show', ['productTarget' => $product]);
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('first.edit', ['productTarget' => $product]);


    }

    public function update(Request $request, $id)
    {
        $Product = Product::findOrFail($id);
        $Product->title = $request->input('title');
        $Product->prix = $request->input('prix');

        $Product->update();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }

    public function destroy($id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete();
        return redirect('/')->with('success', 'Personnage Modifié avec succès');
    }
}
