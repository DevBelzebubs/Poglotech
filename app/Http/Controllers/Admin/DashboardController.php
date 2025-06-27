<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\User;
use App\Models\Venta;
class DashboardController extends Controller{
    public function index(){
        $productos = Producto::all();
        $totalUsuarios = User::count();
        $ventasTotales = Venta::sum('total');
        return view('admin.dashboard', compact('productos', 'totalUsuarios', 'ventasTotales'));
    }
}