<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.catalogo', compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.detalle', compact('producto'));
    }
    
    public function catalogo(Request $request){
    $query = Producto::query();

    if ($request->filled('nombre')) {
        $query->where('nombre', 'like', '%' . $request->nombre . '%');
    }

    if ($request->filled('precio_min')) {
        $query->where('precio', '>=', $request->precio_min);
    }

    if ($request->filled('precio_max')) {
        $query->where('precio', '<=', $request->precio_max);
    }

    $productos = $query->get();

    return view('productos.catalogo', compact('productos'));
    }
    public function detalle($id){
        $producto = Producto::findOrFail($id);
        return view('productos.detalle', compact('producto'));
    }
}