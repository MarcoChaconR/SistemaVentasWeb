<?php include_once("encabezado.php"); ?>
<!--Main-->
<main class="bg-white-500 flex-1 p-3 overflow-hidden">
    <div class="flex flex-col">
        <!-- Card Section Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <!--Horizontal form-->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full">
                <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                    Mantenimiento de Productos
                </div>
                <div class="p-3">
                    <form class="w-full" action="procesar_producto.php" method="POST">
                        <!-- Código de Barras -->
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="codigoBarras" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Código de Barras
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="text" id="codigoBarras" name="codigoBarras" required
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                            </div>
                        </div>
                        <!-- Descripción -->
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="descripcion" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Descripción
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="text" id="descripcion" name="descripcion" required
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                            </div>
                        </div>
                        <!-- Costo -->
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="costo" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Costo
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="number" id="costo" name="costo" required
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" step="0.01">
                            </div>
                        </div>
                        <!-- Porcentaje de Descuento -->
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="descuento" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Porcentaje de Descuento
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="number" id="descuento" name="descuento" required
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" step="0.01">
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Guardar Producto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--/Horizontal form-->
        </div>
        <!-- /Card Section Ends Here -->
    </div>
</main>
<!--/Main-->
<?php include_once("footer.php"); ?>
