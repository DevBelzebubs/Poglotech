<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
class DashboardController extends Controller{
    public function index(){
        $productos = Producto::all();
        return view('admin.dashboard',compact('productos'));
    }
}