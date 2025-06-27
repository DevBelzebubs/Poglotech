<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        $ventas = \App\Models\Venta::with('usuario', 'detalles.producto')->get();
        return view('admin.ventas.index', compact('ventas'));
    }
}
