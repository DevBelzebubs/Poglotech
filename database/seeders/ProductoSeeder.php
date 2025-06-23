<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder{
    public function run(): void{
         Producto::insert([
        ['nombre' => 'Laptop Gamer ASUS', 'descripcion' => '16GB RAM, RTX 4060', 'precio' => 4800.00, 'stock' => 10],
        ['nombre' => 'Monitor LG 24"', 'descripcion' => 'IPS FullHD', 'precio' => 650.50, 'stock' => 25],
        ['nombre' => 'Teclado Mecánico', 'descripcion' => 'Switch Red, RGB', 'precio' => 180.00, 'stock' => 40],
        ['nombre' => 'Mouse Logitech G203', 'descripcion' => 'Sensor óptico, RGB', 'precio' => 85.99, 'stock' => 35],
        ['nombre' => 'Auriculares HyperX Cloud II','descripcion' => 'Sonido envolvente 7.1, micrófono desmontable','precio' => 379.90,'stock' => 15,],
        ['nombre' => 'Tarjeta Gráfica RTX 4060 Ti','descripcion' => '8GB GDDR6, DLSS 3, Ray Tracing','precio' => 2199.99,'stock' => 7,],
        ['nombre' => 'Procesador AMD Ryzen 7 5800X','descripcion' => '8 núcleos, 16 hilos, 4.7GHz boost','precio' => 1050.00,'stock' => 12,],
        ['nombre' => 'SSD Kingston NV2 1TB','descripcion' => 'M.2 NVMe Gen4, hasta 3500MB/s','precio' => 299.90,'stock' => 30,],
        ['nombre' => 'Placa Madre ASUS TUF B550M-Plus','descripcion' => 'Socket AM4, soporte PCIe 4.0','precio' => 599.00,'stock' => 10,],
        ['nombre' => 'Fuente EVGA 600W 80+ Bronze','descripcion' => 'Certificada, ventilador silencioso','precio' => 230.00,'stock' => 25,],
        ['nombre' => 'Gabinete NZXT H510','descripcion' => 'Tempered glass, buena ventilación','precio' => 340.00,'stock' => 8,],
        ['nombre' => 'Mousepad Logitech G240','descripcion' => 'Superficie de tela, tamaño mediano','precio' => 45.50,'stock' => 50,],
        ['nombre' => 'Combo Teclado + Mouse Redragon','descripcion' => 'Retroiluminado, switches OUTEMU','precio' => 150.00,'stock' => 20,],
        ['nombre' => 'Monitor Samsung 27" 144Hz','descripcion' => 'Full HD, 1ms de respuesta','precio' => 899.00,'stock' => 6,],
        ]);
    }
}
