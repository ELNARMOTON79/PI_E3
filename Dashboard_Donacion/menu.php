<div class="flex flex-col bg-green-500 fixed h-screen justify-between w-64 py-4 px-2">

    <!-- El título de la dashboard -->
    <div class="flex items-center text-white text-3xl px-5">
    <div class="flex-shrink-0">
        <!-- Aumentamos el tamaño de la imagen y agregamos forma redonda -->
        <img class="w-18 h-16 rounded-full" 
             src="../SRC/logoblanco1.png" 
             alt="Logo Edu4All">
    </div>
    <b class="ml-0 text-4xl">Edu4All</b>
</div>


    <!-- Aquí va el icono grill -->
    <div class="flex flex-col flex-auto">

        <!-- Dashboard -->
        <div class="p-2 hover:bg-green-700 rounded-md transition duration-500 ease-in-out">
            <a href="?action=dashboard" class="flex flex-row space-x-3">
                <h4 class="text-white hover:text-black">
                    <i class="fa-solid fa-list"></i>
                    Dashboard
                </h4>
            </a>
        </div>

        <!-- Sección Desplegable - Usuarios -->
        <div class="p-2 hover:bg-green-700 rounded-md transition duration-500 ease-in-out">
            <a href="?action=donar" class="flex flex-row items-center justify-between w-full focus:outline-none">
                <span class="text-white hover:text-black">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                    Donor
                </span>
                <span id="iconUsuarios" class="text-white">
                </span>
            </a>
        </div>

        <div class="p-2 hover:bg-green-700 text-white rounded-md transition duration-500 ease-in-out">
            <a href="?action=tracking" class="flex flex-row items-center justify-between w-full focus:outline-none">
                <span class="text-white hover:text-black">
                
                <i class="fa-solid fa-magnifying-glass-dollar"></i>
                    Donation tracking

                </span>
                <span id="iconActividades" class="text-white">
                </span>
            </a>
        </div>
        <div class="p-2 hover:bg-green-700 rounded-md transition duration-500 ease-in-out">
            <a href="?action=settings" class="flex flex-row space-x-3">
                <h4 class="text-white hover:text-black">
                <i class="fa-solid fa-gears"></i>
                    Setting
                </h4>
            </a>
        </div>
        <div class="p-2 hover:bg-green-700 rounded-md transition duration-500 ease-in-out">
            <a href="?action=comunicacion" class="flex flex-row space-x-3">
                <h4 class="text-white hover:text-black">
                <i class="fa-solid fa-paper-plane"></i>
                    Communication
                </h4>
            </a>
        </div>


    </div>

    <!-- Botón de salir -->
    <div class="flex flex-col">
        <a class="rounded-full bg-green-900 py-2 text-white text-lg hover:bg-green-700 text-center" href="../logins/logout.php">Sign Out</a>
    </div>

</div>
