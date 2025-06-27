<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\DetalleVenta;
use Illuminate\Support\Facades\Auth;
class CompraController extends Controller{
    public function realizarCompra(){
        $carrito = session()->get('carrito', []);

        if (empty($carrito)) {
            return redirect()->route('carrito.ver')->with('error', 'El carrito está vacío.');
        }
        $total = 0;
        foreach ($carrito as $item) {
            $total += $item['precio'] * $item['cantidad'];
        }

        $venta = Venta::create([
            'user_id' => Auth::id(),
            'total' => $total,
        ]);

        foreach ($carrito as $id => $item) {
            DetalleVenta::create([
                'venta_id' => $venta->id,
                'producto_id' => $id,
                'cantidad' => $item['cantidad'],
                'precio_unitario' => $item['precio'],
            ]);
        }
        session()->forget('carrito');
        return redirect()->route('catalogo')->with('success', 'Compra realizada con éxito.');
    }
    public function ver(){
    $carrito = session()->get('carrito', []);
    return view('carrito.index', compact('carrito'));
}
}
