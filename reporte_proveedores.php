<?php include_once("encabezado.php"); ?>
<!--Main-->
<main class="bg-white-500 flex-1 p-3 overflow-hidden">
    <div class="flex flex-col">
        <!-- Card Section Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <!-- Table Card -->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full">
                <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                    Reporte de Proveedores
                </div>
                <div class="p-3">
                    <table class="table-fixed w-full">
                        <thead>
                            <tr>
                                <th class="border w-1/5 px-4 py-2">Nombre del Proveedor</th>
                                <th class="border w-1/5 px-4 py-2">Dirección</th>
                                <th class="border w-1/5 px-4 py-2">Correo Electrónico</th>
                                <th class="border w-1/5 px-4 py-2">Teléfono</th>
                                <th class="border w-1/5 px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">XYZ Distribuciones</td>
                                <td class="border px-4 py-2">123 Calle Falsa, Ciudad Gótica</td>
                                <td class="border px-4 py-2">contacto@xyzdistribuciones.com</td>
                                <td class="border px-4 py-2">555-1234</td>
                                <td class="border px-4 py-2">
                                    <a href="proveedores.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Editar
                                    </a>
                                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">Importaciones Acme</td>
                                <td class="border px-4 py-2">456 Avenida Principal, Metrópolis</td>
                                <td class="border px-4 py-2">ventas@acmeimports.com</td>
                                <td class="border px-4 py-2">555-5678</td>
                                <td class="border px-4 py-2">
                                    <a href="proveedores.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Editar
                                    </a>
                                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Suministros Rápidos</td>
                                <td class="border px-4 py-2">789 Ruta Norte, Smallville</td>
                                <td class="border px-4 py-2">info@rapid-supplies.com</td>
                                <td class="border px-4 py-2">555-8910</td>
                                <td class="border px-4 py-2">
                                    <a href="proveedores.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded cursor-pointer">
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