<?php

namespace App\Http\Controllers\User;
use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function agregar(Request $request,$id){
        $producto = Producto::findOrFail($id);
        $carrito = session()->get('carrito', []);
        if(isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
        } else {
            $carrito[$id] = [
                "nombre" => $producto->nombre,
                "precio" => $producto->precio,
                "cantidad" => 1,
                "imagen" => $producto->imagen
            ];
        }
        session(['carrito' => $carrito]);
        return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }
    public function ver(){
        $carrito = session()->get('carrito', []);
        return view('carrito.index', compact('carrito'));
    }
    public function eliminar($id){
        $carrito = session()->get('carrito', []);
        if(isset($carrito[$id])) {
            unset($carrito[$id]);
            session(['carrito' => $carrito]);
        }
        return redirect()->back()->with('success', 'Producto eliminado del carrito.');
    }
}
