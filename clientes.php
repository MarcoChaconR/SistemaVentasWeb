<?php include_once("encabezado.php"); ?>
<!--Main-->
<main class="bg-white-500 flex-1 p-3 overflow-hidden">
    <div class="flex flex-col">
        <!-- Card Section Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <!--Horizontal form-->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full">
                <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                    Gestión de Clientes
                </div>
                <div class="p-3">
                    <form class="w-full" action="procesar_cliente.php" method="POST">
                        <!-- Nombre Completo -->
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="nombreCompleto" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Nombre Completo
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="text" id="nombreCompleto" name="nombreCompleto" required
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                            </div>
                        </div>
                        <!-- Dirección -->
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="direccion" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Dirección
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="text" id="direccion" name="direccion" required
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                            </div>
                        </div>
                        <!-- Correo Electrónico -->
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="email" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Correo Electrónico
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="email" id="email" name="email" required
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                            </div>
                        </div>
                        <!-- Número de Teléfono -->
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label for="telefono" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                    Número de Teléfono
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}"
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="1234567890">
                            </div>
                        </div>
                        <!-- Botón de Guardar -->
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    Guardar Cliente
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
