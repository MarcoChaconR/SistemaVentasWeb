<?php include_once("encabezado.php"); ?>
<!--Main-->
<main class="bg-white-500 flex-1 p-3 overflow-hidden">
    <div class="flex flex-col">
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full">
                <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                    Cargar Factura
                </div>
                <div class="p-3">
                    <form class="w-full" action="procesar_carga_factura.php" method="POST" enctype="multipart/form-data">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="fileInput" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Seleccionar Factura:
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="file" id="fileInput" name="factura" accept=".pdf, .jpg, .jpeg, .png" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                            </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button data-modal='toppedModal' class="modal-trigger bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Cargar factura
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

<!-- Topped Modal -->
<div id='toppedModal' class="modal-wrapper">
    <div class="overlay close-modal"></div>
    <div class="modal">
        <div class="modal-content shadow-lg p-5">
            <div class="border-b p-2 pb-3 pt-0 mb-4">
                <div class="flex justify-between items-center">
                    Carga de Facturas
                    <span class='close-modal cursor-pointer px-3 py-1 rounded-full bg-gray-100 hover:bg-gray-200'>
                        <i class="fas fa-times text-gray-700"></i>
                    </span>
                </div>
            </div>
            <!-- Modal content -->
            <p>
                La factura ha sido cargada correctamente en el sistema.<br><br>
            </p>
            <a href="index.php" class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Aceptar
            </a>
        </div>

    </div>
</div>


<?php include_once("footer.php"); ?>