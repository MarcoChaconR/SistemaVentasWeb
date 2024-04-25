<?php include_once("encabezado.php"); ?>
<!--Main-->
<main class="bg-white-500 flex-1 p-3 overflow-hidden">
    <div class="flex flex-col">
        <!-- Card Section Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <!-- Table Card -->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full">
                <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                    Reporte de Ventas
                </div>
                <div class="p-3">
                    <table class="table-fixed w-full">
                        <thead>
                            <tr>
                                <th class="border w-1/4 px-4 py-2">Nombre del Cliente</th>
                                <th class="border w-1/4 px-4 py-2">Fecha de Venta</th>
                                <th class="border w-1/4 px-4 py-2">Total Vendido</th>
                                <th class="border w-1/4 px-4 py-2">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">John Doe</td>
                                <td class="border px-4 py-2">2023-10-01</td>
                                <td class="border px-4 py-2">$1,500</td>
                                <td class="border px-4 py-2 text-green-500">Completada</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">Jane Smith</td>
                                <td class="border px-4 py-2">2023-10-02</td>
                                <td class="border px-4 py-2">$750</td>
                                <td class="border px-4 py-2 text-yellow-500">Pendiente</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">Alice Johnson</td>
                                <td class="border px-4 py-2">2023-10-03</td>
                                <td class="border px-4 py-2">$2,200</td>
                                <td class="border px-4 py-2 text-red-500">Cancelada</td>
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