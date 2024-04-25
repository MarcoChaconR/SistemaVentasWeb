<?php include_once("encabezado.php"); ?>
<!--Main-->
<main class="bg-white-500 flex-1 p-3 overflow-hidden">
    <div class="flex flex-col">
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full">
                <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                    Cargar Factura para Validación
                </div>
                <div class="p-3">
                    <form class="w-full" action="validar_factura.php" method="POST" enctype="multipart/form-data">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="fileInput" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Seleccionar Factura:
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="file" id="fileInput" name="factura" accept=".pdf" required
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                            </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Validar Factura
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!--/Main-->
<?php include_once("footer.php"); ?>
