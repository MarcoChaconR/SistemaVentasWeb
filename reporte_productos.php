<?php include_once("encabezado.php"); ?>
<!--Main-->
<main class="bg-white-500 flex-1 p-3 overflow-hidden">
    <div class="flex flex-col">
        <!-- Card Section Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <!-- Table Card -->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full">
                <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                    Reporte de Productos
                </div>
                <div class="p-3">
                    <table class="table-fixed w-full">
                        <thead>
                            <tr>
                                <th class="border w-1/5 px-4 py-2">Nombre del Producto</th>
                                <th class="border w-1/5 px-4 py-2">Categoría</th>
                                <th class="border w-1/5 px-4 py-2">Precio</th>
                                <th class="border w-1/5 px-4 py-2">Cantidad en Inventario</th>
                                <th class="border w-1/5 px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">Cámara Digital</td>
                                <td class="border px-4 py-2">Electrónica</td>
                                <td class="border px-4 py-2">$450.00</td>
                                <td class="border px-4 py-2">30</td>
                                <td class="border px-4 py-2">
                                    <a href="productos.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Editar
                                    </a>
                                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">Laptop Pro</td>
                                <td class="border px-4 py-2">Computadoras</td>
                                <td class="border px-4 py-2">$1200.00</td>
                                <td class="border px-4 py-2">15</td>
                                <td class="border px-4 py-2">
                                    <a href="productos.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Editar
                                    </a>
                                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Smartphone X</td>
                                <td class="border px-4 py-2">Móviles</td>
                                <td class="border px-4 py-2">$999.00</td>
                                <td class="border px-4 py-2">25</td>
                                <td class="border px-4 py-2">
                                    <a href="productos.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Editar
                                    </a>
                                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /Table Card -->
        </div>
        <!-- /Card Section Ends Here -->
    </div>
</main>
<!--/Main-->
<?php include_once("footer.php"); ?>