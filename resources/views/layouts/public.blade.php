<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="icon"
        type="image/vnd.microsoft.icon"
        href="{{asset('images/LOGO_CHESTER_ICO.ico')}}"

    />
    <title>CHESTER</title>

    <!-- ARCHIVOS CSS BOOTSTRAP 5 -->

    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"

    />
    <!-- ARCHIVOS CSS PERSONALIZADOS -->


    <!-- FUENTES -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap");
    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow&display=swap");
    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital@0;1&display=swap");
    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;1,400&display=swap");
    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;1,400;1,500&display=swap");
    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap");
    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap");
    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap");
    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap");
    </style>
    <link type="text/css" rel="stylesheet" href="{{asset ('css/style.css')}}" />
</head>
<body>
<!-- NABVAR -->

<div class="col p-0">
    <nav class="navbar navbar-expand-lg" id="navbar-green">
        <div class="container-fluid">
            <div class="logo">
                <a href="/">
                <img
                    src="{{asset('images/LOGO_CHESTER_1.png')}}"
                    class="img-fluid"
                    alt="img-fluid"
                /></a>
            </div>


            <div class="collapse navbar-collapse" id="menu-principal">
                <ul
                    class="navbar-nav mb-3 flex-fill justify-content-end align-items-center"
                >
                    <li class="nav-item mx-4">
                        <a href="{{url('carta')}}" class="nav-link active" id="text-nav">CARTA</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a href="{{url('noticias')}}" class="nav-link" id="text-nav">NOTICIAS</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a href="{{url('juegos')}}" class="nav-link" id="text-nav">JUEGOS</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a href="{{url('contacto')}}" class="nav-link" id="text-nav">CONTACTO</a>
                    </li>

                    <?php if(Auth::check()):?>
                    <li class="nav-item mx-4">
                        <a class="nav-link bg-black" id="text-nav" href="{{url('perfil/' . Auth::user()->id)}}"><?=Auth::user()->nombre?></a>
                    </li>


                    <div class="nav-item mx-4" id="boton-logout" style="margin-top: 0.4rem">
                        <form name="logout" method="post" action="{{url('logout')}}" enctype="multipart/form-data" >
                            @csrf
                            <button type="submit" class="logout" href="" style="background: transparent; border: 0;">SALIR</button>
                        </form>
                    </div>
                    <?php else: ?>

                    <a class="nav-item mx-4" id="icono-user" href="{{url('login')}}">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-person-circle"
                            viewBox="0 0 16 16"
                        >
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path
                                fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
                            />
                        </svg>
                    </a>
                    <?php endif ?>
                </ul>
            </div>

            <button
                class="navbar-toggler ms-auto"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#navbar1"
                aria-controls="navbar1"
            >
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <div
        class="offcanvas offcanvas-start"
        tabindex="-1"
        id="navbar1"
        aria-labelledby="navbar1"
    >
        <div class="offcanvas-header">
            <button
                type="button"
                class="btn btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
            ></button>
        </div>
        <div class="offcanvas-body p-5">
            <div class="logo-offcanvas">
                <img
                    src="{{asset('images/LOGO_CHESTER.png')}}"
                    class="img-fluid"
                    alt="img-fluid"
                />
            </div>

            <div class="submenu">
                <ul class="list-inline-submenu my-5">
                    <li class="list-inline-item-submenu"><a href="{{url('carta')}}">CARTA</a></li>
                    <li class="list-inline-item-submenu"><a href="{{url('noticias')}}">NOTICIAS</a></li>
                    <li class="list-inline-item-submenu"><a href="{{url('juegos')}}">JUEGOS</a></li>
                    <li class="list-inline-item-submenu"><a href="{{url('contacto')}}">CONTACTO</a></li>

                    <br />
                    <hr class="linea" />
                    <br />
                    <li class="list-inline-item-submenu flex-column align-content-end">
                        @auth
                            <a href="{{ url('perfil/' . Auth::user()->id) }}">MI PERFIL</a>
                            <form name="logout" method="post" action="{{ url('logout') }}" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="btn text-black">SALIR</button>
                            </form>
                        @else
                            <a href="{{ url('login') }}">INICIAR SESIÓN</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@yield('content')


<!-- FOOTER-->

<!-- Footer -->
<footer
    class="text-center text-lg-start text-white"
    style="background-color: #fa8b0d"
>
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row align-items-end">
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" id="col-1-footer">
                    <div class="submenu" id="submenu-footer">
                        <ul class="list-inline-submenu mt-5" id="submenu-footer-texto">
                            <li class="list-inline-item-submenu"><a href="{{url('carta')}}">Carta</a></li>
                            <li class="list-inline-item-submenu"><a href="{{url('noticias')}}">Noticias</a></li>
                            <li class="list-inline-item-submenu"><a href="{{url('juegos')}}">Juegos</a></li>
                            <li class="list-inline-item-submenu"><a href="{{url('contacto')}}">Contacto</a></li>
                            <li class="list-inline-item-submenu"><a href="#">Sobre nosotros</a></li>
                            <li class="list-inline-item-submenu"><a href="#">Aviso legal</a></li>
                            <li class="list-inline-item-submenu"><a href="#">Política de cookies</a></li>
                            <li class="list-inline-item-submenu m-0"><a href="#">Protección de datos</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" id="col-2-footer">
                    <img src="{{asset('images/LOGO_CHESTER.png')}}" class="logo-footer" alt="img-fluid" width="200" height="70">
                </div>


                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" id="iconos-rss">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/chesterlog/?locale=es_ES" class="text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook text-white" viewBox="0 0 16 16" id="facebook">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                    </a>

                    <!-- Twitter -->
                    <a href="" class="text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter text-white" viewBox="0 0 16 16" id="twitter">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    </a>

                    <!-- Google -->
                    <a href="" class="text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google text-white" viewBox="0 0 16 16" id="google">
                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/barchesterlog/" class="text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram text-white" viewBox="0 0 16 16" id="instagram">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                    </a>
                </div>
            </div>
            <!-- Grid column -->
    <!--Grid row-->
    </section>

    <!-- Section: Copyright -->
    <section class="p-3 pt-0">
        <div class="row d-flex align-items-center"  id="copyright">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
                <!-- Copyright -->
                <div class="p-3" id="text-copyright">
                    © 2023 Chester SL - Todos los derechos reservados
                </div>
                <!-- Copyright -->
            </div>
            <!-- Grid column -->
        </div>
    </section>
    <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
</footer>
<!-- Footer -->


<!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>


</body>
</html>
