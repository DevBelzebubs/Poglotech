<div id="sidebarCarrito" class="position-fixed end-0 top-0 bg-white shadow-lg p-4 border h-100" style="width: 350px; z-index:1050; display: none;">
    <h5 class="mb-3">🛒 Mi Carrito</h5>
    <button onclick="cerrarSidebar()" class="btn btn-sm btn-outline-secondary mb-3">Cerrar ✖</button>
    @php
    $carrito = session('carrito', []); 
    $total = 0;
    foreach ($carrito as $item) {
        $total += $item['precio'] * $item['cantidad'];
    }
    @endphp
    @if(count($carrito) > 0)
        @foreach($carrito as $id => $item)
            <div class="d-flex mb-3 align-items-center border-bottom pb-2">
                <img src="{{ asset('storage/' . $item['imagen']) }}" alt="..." class="me-2" width="60" height="60" style="object-fit: cover;">
                <div class="flex-grow-1">
                    <p class="mb-1 fw-bold">{{ $item['nombre'] }}</p>
                    <p class="mb-1">S/ {{ number_format($item['precio'], 2) }}</p>
                    <p class="mb-1">Cantidad: {{ $item['cantidad'] }}</p>
                    <form action="{{ route('carrito.eliminar', $id) }}" method="POST">
                        @csrf
                        <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
        <div class="text-end mt-3">
            <div class="mt-3 text-end fw-bold">
                Total: S/ {{ number_format($total, 2) }}
            </div>
        <div class="text-end mt-3">
            <form action="{{ route('comprar') }}" method="POST" onsubmit="return confirmarCompra()" id="compraForm">
            @csrf
                <button type="submit" class="btn btn-success w-100">Finalizar compra</button>
            </form>
        </div>
    </div>
    @else
        <p class="text-muted">Tu carrito está vacío.</p>
    @endif
</div>
<button onclick="abrirSidebar()" class="btn btn-primary position-fixed bottom-0 end-0 m-4 shadow rounded-circle" style="z-index:1040;">
    Carrito
</button>
<script>
    function abrirSidebar() {
        document.getElementById('sidebarCarrito').style.display = 'block';
    }

    function cerrarSidebar() {
        document.getElementById('sidebarCarrito').style.display = 'none';
    }
    function confirmarCompra() {
        return confirm('¿Estás seguro de finalizar la compra?');
    }
    document.addEventListener('DOMContentLoaded', () => {
        const compraForm = document.getElementById('compraForm');
        if (compraForm) {
            compraForm.addEventListener('submit', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: '¿Confirmar compra?',
                    text: '¿Estás seguro de finalizar esta compra?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, comprar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        }
        @if(session('success'))
            Swal.fire({
                title: '¡Compra exitosa!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: 'Error',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        @endif
    });
</script>
