<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('admin.productos.index', compact('productos'));
    }

    public function create(){
        return view('admin.productos.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=> 'required|string|max:255',
            'descripcion'=>'nullable|string',
            'precio'=>'required|numeric',
            'stock'=>'required|integer',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('productos', 'public');
        }

        Producto::create($data);

        return redirect()->route('admin.productos.index')->with('success', 'Producto creado correctamente');
    }

    public function show(string $id){
        //
    }

    public function edit(string $id){
        $producto = Producto::findOrFail($id);
        return view('admin.productos.edit', compact('producto'));
    }

    public function update(Request $request, string $id){
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'precio' => 'required|numeric',
        'stock' => 'required|integer',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);
    $producto = Producto::findOrFail($id);
    $data = $request->only(['nombre', 'descripcion', 'precio', 'stock']);
    if ($request->hasFile('imagen')) {
        if ($producto->imagen && \Storage::exists('public/' . $producto->imagen)) {
            \Storage::delete('public/' . $producto->imagen);
        }
        $imagen = $request->file('imagen')->store('productos', 'public');
        $data['imagen'] = $imagen;
    }
    $producto->update($data);
    return redirect()->route('admin.productos.index')->with('success', 'Producto actualizado correctamente');
    }
    public function destroy(string $id){
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('admin.productos.index')->with('success', 'Producto eliminado correctamente');
    }
}
