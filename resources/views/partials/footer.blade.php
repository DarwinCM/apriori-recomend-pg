<footer>
    <div class="container">
        <div class="sec about">
            <h2>INFORMACIÓN</h2>
            <div class="my-2 font-semibold text-white">
                <i class="fa-solid fa-location-dot mr-1"></i>
                Ubicación
                <p class="font-normal">Jr. Artesanal MzA_Lt.13_Urb. APIRAJ Juliaca, Puno, Perú
                </p>
            </div>
            <div class="my-2 font-semibold text-white">
                <i class="fa-solid fa-phone-volume mr-1"></i>
                Teléfonos
                <p class="font-normal">
                    <a class="hover:text-green-500" target="_blank"
                        href="https://api.whatsapp.com/send?phone=+51996030355&text=Hola, Nececito más información!">
                        +51 996030355
                    </a>
                </p>
            </div>
            <div class="my-2 font-semibold text-white">
                <i class="fa-solid fa-envelope mr-1"></i>
                Correo Electrónico <br>
                <p class="font-normal">
                    <a class="hover:text-indigo-700" href="mailto:infotelbusiness@gmail.com.pe">infotelbusiness@gmail.com.pe</a>
                </p>
            </div>
        </div>
        <div class="sec links">
            <h2>MENÚ PRINCIPAL</h2>
            <ul>
                <li>
                    <a class="text-gray-300 hover:text-indigo-700" href="{{ route('inicio') }}">
                        <i class="fa-solid fa-chevron-right fa-xs mr-1"></i>Inicio
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-indigo-700" href="{{ route('nosotros') }}">
                        <i class="fa-solid fa-chevron-right fa-xs mr-1"></i>Nosotros
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-indigo-700" href="{{ route('contactanos') }}">
                        <i class="fa-solid fa-chevron-right fa-xs mr-1"></i>Contáctanos
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-indigo-700" href="{{ route('productos') }}">
                        <i class="fa-solid fa-chevron-right fa-xs mr-1"></i>Productos
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-indigo-700" href="{{ route('galeria') }}">
                        <i class="fa-solid fa-chevron-right fa-xs mr-1"></i>Galeria
                    </a>
                </li>
                @auth
                    <li>
                        <a class="text-gray-300 hover:text-indigo-700" href="{{ route('sistema-dashboard') }}">
                            <i class="fa-solid fa-chevron-right fa-xs mr-1"></i>Sistema
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
        <div class="sec contact">
            <h2>SÍGUENOS EN</h2>
            <ul class="sci">
                <li>
                    <a class="bg-black hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-700" href="https://www.facebook.com/DDEVAPERU/" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a class="bg-black hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-700" href="https://twitter.com/DevaperuS" target="_blank">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a class="bg-black hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 hover:to-pink-500" href="https://www.instagram.com/devaperu_oficial/?hl=es-la"
                        target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a class="bg-black hover:bg-gradient-to-r hover:from-gray-700 hover:to-blue-700" href="https://www.linkedin.com/in/devaperu-sac-5b250a227/"
                        target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a class="bg-black hover:bg-gradient-to-r hover:from-red-900 hover:to-red-700" href="#">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
            </ul>
            <div class="logo">
                <a href="#">
                    <img class="h-16 w-auto my-4" src="/img/infotel_blanco.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright ©2023 INFOTEL BUSINESS SAC. Todos los derechos reservados</p>
    </div>
</footer>
