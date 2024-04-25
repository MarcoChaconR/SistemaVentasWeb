<?php include_once("encabezado.php"); ?>
<!--Main-->
<main class="bg-white-300 flex-1 p-3 overflow-hidden">
    <div class="panel">
        <div class="flex flex-col">
            <h2 class="font-semibold text-3xl text-grey-darkest mb-6">
                Panel de Reportes
            </h2>
            <!-- Stats Row Starts Here -->
            <div class="flex flex-2 md:flex-row lg:flex-row mx-12">
                <!-- Card 1 para Reporte de Ventas -->
                <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                    <div class="p-4 flex flex-col">
                        <a href="ventas.php" class="no-underline text-white text-2xl">
                            Reporte de Ventas
                        </a>
                        <p class="no-underline text-white text-lg">
                            Genera un reporte detallado de las ventas por período.
                        </p>
                    </div>
                </div>

                <!-- Card 2 para Reporte de Productos -->
                <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                    <div class="p-4 flex flex-col">
                        <a href="reporte_productos.php" class="no-underline text-white text-2xl">
                            Reporte de Productos
                        </a>
                        <p class="no-underline text-white text-lg">
                            Muestra el estado actual del inventario de productos.
                        </p>
                    </div>
                </div>

                <!-- Card 3 para Reporte de Proveedores -->
                <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                    <div class="p-4 flex flex-col">
                        <a href="reporte_proveedores.php" class="no-underline text-white text-2xl">
                            Reporte de Proveedores
                        </a>
                        <p class="no-underline text-white text-lg">
                            Información sobre los proveedores y sus entregas.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Stats Row Ends Here -->
        </div>
    </div>
</main>
<!--/Main-->
<?php include_once("footer.php"); ?>
