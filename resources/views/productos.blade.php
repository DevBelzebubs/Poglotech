@extends('layouts.app')

@section('content')
<section class="container mt-5">
    <h1 class="text-center mb-4">Productos Disponibles</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio sin Cuotas</th>
                <th>Garantía Proveedor</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Batería Interna</td>
                <td>Almacena energía para alimentar la laptop cuando no está conectada a la corriente.</td>
                <td><img src="https://cdn.worldvectorlogo.com/logos/dell-1.svg" class="img-fluid" style="max-width: 120px;"></td>
                <td><img src="https://http2.mlstatic.com/D_NQ_NP_848422-MLU74606433923_022024-O.webp" class="img-fluid" style="max-width: 120px;"></td>
                <td>S/ 200.00</td>
                <td>6 meses</td>
                <td>
                    <button class="btn btn-primary mb-2">Añadir</button><br>
                    <button class="btn btn-success">Comprar</button>
                </td>
            </tr>
            <tr>
                <td>Memoria RAM</td>
                <td>Mejora el rendimiento al almacenar datos temporales.</td>
                <td><img src="https://media.kingston.com/kingston/opengraph/ktc-opengraph-homepage.jpg" class="img-fluid" style="max-width: 120px;"></td>
                <td><img src="https://oechsle.vteximg.com.br/arquivos/ids/16244333-1000-1000/image-c0f68876f6ed48808881e6cf256deadc.jpg" class="img-fluid" style="max-width: 120px;"></td>
                <td>S/ 100.00</td>
                <td>2 años</td>
                <td>
                    <button class="btn btn-primary mb-2">Añadir</button><br>
                    <button class="btn btn-success">Comprar</button>
                </td>
            </tr>
            <tr>
                <td>Ventilador</td>
                <td>Ayuda a disipar el calor y mantener la temperatura adecuada dentro de la laptop.</td>
                <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1MMblS4M-ts8HuDI_uHrJQeAxYfMFfuvOfg&s" class="img-fluid" style="max-width: 120px;"></td>
                <td><img src="https://promart.vteximg.com.br/arquivos/ids/5896058-1000-1000/image-2f4263495d714b4c8219083fae9ca28f.jpg" class="img-fluid" style="max-width: 120px;"></td>
                <td>S/ 350.00</td>
                <td>6 meses</td>
                <td>
                    <button class="btn btn-primary mb-2">Añadir</button><br>
                    <button class="btn btn-success">Comprar</button>
                </td>
            </tr>
            <tr>
                <td>Cargador</td>
                <td>Convierte la corriente eléctrica para cargar la batería de la laptop.</td>
                <td><img src="https://static.vecteezy.com/system/resources/previews/021/514/814/non_2x/toshiba-logo-brand-computer-symbol-white-design-french-laptop-illustration-with-red-background-free-vector.jpg" class="img-fluid" style="max-width: 120px;"></td>
                <td><img src="https://promart.vteximg.com.br/arquivos/ids/1656229-1000-1000/10068751.jpg" class="img-fluid" style="max-width: 120px;"></td>
                <td>S/ 200.00</td>
                <td>5 años</td>
                <td>
                    <button class="btn btn-primary mb-2">Añadir</button><br>
                    <button class="btn btn-success">Comprar</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="text-center my-4">
        <a href="{{ route('index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Volver a Inicio
        </a>
    </div>
    <div class="text-center mb-4 footer-text">
        <p>
            Portable Technology utiliza cookies internas y externas para garantizar la mejor experiencia en nuestra web y con fines estadísticos. Si sigues navegando sin modificar la configuración, aceptas nuestra Política de cookies.
        </p>
    </div>
</section>
@endsection