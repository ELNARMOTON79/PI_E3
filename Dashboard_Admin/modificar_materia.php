
<form action="" method="post" class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <!-- Selección de Actividad -->
            <div class="space-y-2">
                <label for="actividad" class="block text-sm font-medium text-gray-700">Modificar Materia</label>
                <select id="actividad" name="actividad" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="">Selecciona una materia</option>
                </select>
            </div>
            
            <!-- Descripción -->
            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700">
                    <i class="fas fa-align-left mr-2"></i>Descripción
                </label>
                <textarea name="descripcion" id="descripcion" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
            </div>

            <!-- Fecha -->
            <div>
                <label for="fecha" class="block text-sm font-medium text-gray-700">
                    <i class="fas fa-calendar mr-2"></i>Fecha
                </label>
                <input type="date" name="fecha" id="fecha" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Duración -->
            <div>
                <label for="duracion" class="block text-sm font-medium text-gray-700">
                    <i class="fas fa-clock mr-2"></i>Duración
                </label>
                <input type="number" name="duracion" id="duracion" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Selección de Materia -->
            <div class="space-y-2">
                <label for="fk_materia" class="block text-sm font-medium text-gray-700">Elegir Materia</label>
                <select id="fk_materia" name="fk_materia" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="">Selecciona una Materia</option>
                    <option value="Mat 1">Mat 1</option>
                    <option value="Mat 2">Mat 2</option>
                    <option value="Mat 3">Mat 3</option>
                    <option value="Mat 4">Mat 4</option>
                    <option value="Mat 5">Mat 5</option>
                </select>
            </div>

            <!-- Botones de Acción -->
            <div class="flex justify-end space-x-4 mt-6">
                <button type="button" onclick="window.location.href='http://localhost/Proyecto_CRUD/Dashboard_Admin/dashboard.php';"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-200 focus:outline-none transition duration-500">
                    Cancelar
                </button>
                <button type="submit" name="modificar"
                        class="px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Modificar Materia
                </button>
            </div>
        </form>

        <!-- PHP para modificar actividad -->
        <?php
        if (isset($_POST['modificar'])) {
            $nombre_materia = $_POST['materia'];
            $descripcion = $_POST['descripcion'];
            $fecha = $_POST['fecha'];
            $duracion = $_POST['duracion'];
            $fk_materia = $_POST['fk_materia'];

            require_once("../Conexion/contacto.php");
            $obj = new Contacto();
            $resultado = $obj->modificar_materia($nombre_actividad, $descripcion, $fk_materia, $fecha, $duracion);

            if ($resultado) {
                echo "<p class='text-green-600 mt-4'>Materia modificada exitosamente.</p>";
            } else {
                echo "<p class='text-red-600 mt-4'>Error al modificar la Materia.</p>";
            }
        }
        ?>
    </div>
    <script>
        // Solución para advertencias de Tailwind
        if (window.console && console.warn) {
            const originalWarn = console.warn;
            console.warn = (...args) => {
                if (args[0].includes('cdn.tailwindcss.com')) return;
                originalWarn.apply(console, args);
            };
        }
    </script>
</body>

</html>
