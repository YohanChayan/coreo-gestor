<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    // Por hacer
    public function index()
    {
        // $products = Product::get();
        // return view('products.index', compact('products'));
    }

    // GET (function q se ejecutara cuando se acceda a la ruta para crear un producto)
    public function create()
    {
        return view('products.create');
    }

    // POST (function q se ejecutara cuando se envie el formulario)
    public function store(Request $request)
    {

        /*
            Validacion:
            - por cada campo del json se valida (se establecen reglas)
            - name: obligatorio, string, maximo 10 caracteres
            - description: nullable, string
            - price: obligatorio, numeric, minimo 1
         */ 
        $request->validate([
            'name' => 'required|string|max:10',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:1'
        ]);

        

        
        // return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }
    
}
