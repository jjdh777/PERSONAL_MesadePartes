<!doctype html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <title>Registro | Minia - Minimal Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">

         <!-- Sweet Alert-->
         <link href="../../assests/css/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <!-- preloader css -->
        <link rel="stylesheet" href="../../assests/css/preloader.min.css" type="text/css">

        <!-- Bootstrap Css -->
        <link href="../../assests/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="../../assests/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="../../assests/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="../../assests/picture/logo-sm.svg" alt="" height="28"> <span class="logo-txt">JJ</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Registrar Cuenta</h5>
                                            <p class="text-muted mt-2">Registre sus datos en el portal.</p>
                                        </div>
                                        <form id="mnt_form" class="needs-validation custom-form mt-4 pt-2" novalidate="" action="index.html">
                                            <div class="mb-3">
                                                <label for="usu_correo" class="form-label">Correo Electrónico</label>
                                                <input type="text" class="form-control" id="usu_correo" name="usu_correo" placeholder="Ingrese Correo Electronico" required="">  
                                                <div class="validation-error text-danger"></div>      
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="usu_nomape" class="form-label">Nombres y Apellidos</label>
                                                <input type="text" class="form-control" id="usu_nomape" name="usu_nomape" placeholder="Ingrese Nombres" required="">
                                                <div class="validation-error text-danger"></div>      
                                               <!--  <div class="invalid-feedback">
                                                    Ingrese Nombre
                                                </div>   -->
                                            </div>

                                            <div class="mb-3">
                                                <label for="usu_pass" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" id="usu_pass" name="usu_pass" placeholder="Ingrese Contraseña" required="">
                                                <div class="validation-error text-danger"></div>      
                                               <!--  <div class="invalid-feedback">
                                                    Ingrese Contraseña
                                                </div>      -->  
                                            </div>

                                            <div class="mb-3">
                                                <label for="usu_pass_confir" class="form-label">Confirmar Contraseña</label>
                                                <input type="password" class="form-control" id="usu_pass_confir" name="usu_pass_confir" placeholder="Confirmar Contraseña" required="">
                                                <div class="validation-error text-danger"></div>      
                                                <!-- <div class="invalid-feedback">
                                                    Confirmar Contraseña
                                                </div> -->       
                                            </div>

                                            <div class="mb-4">
                                                <p class="mb-0">Al registrarse acepta los <a href="#" class="text-primary"><strong>terminos y condiciones. </strong></a></p>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Registrarse</button>
                                            </div>
                                        </form>

                                       <!--  <div class="mt-4 pt-2 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign up using -</h5>
                                            </div>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <div class="mt-5 text-center">
                                            <p class="text-muted mb-0">¿Tiene ya una cuenta de acceso? <a href="../../index.php" class="text-primary fw-semibold"> Acceder </a> </p>
                                        </div>
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> JJ. Creado con <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <!-- end carouselIndicators -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“No es camino acertado, para la educación, la imposición autoritaria y violenta. 
                                                            El ideal de los padres se concreta más bien en llegar a ser amigos de sus hijos: amigos a los que se confían las inquietudes, 
                                                            con quienes se consultan los problemas, de los que se espera una ayuda eficaz y amable». (San Josemaría, Es Cristo que pasa, n. 27).”
                                                        </h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0">
                                                                    <!-- <img src="../../assests/picture/avatar-1.jpg" class="avatar-md img-fluid rounded-circle" alt="..."> -->
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 mb-4">
                                                                    <h5 class="font-size-18 text-white">San JoseMaría Escrivá de Balaguer</h5>
                                                                    <p class="mb-0 text-white-50">Sacerdote español, fundador en 1928 del Opus Dei y santo de la Iglesia católica</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“No necesitamos continentes nuevos, 
                                                            sino personas nuevas”</h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0">
                                                                   <!--  <img src="../../assests/picture/avatar-2.jpg" class="avatar-md img-fluid rounded-circle" alt="..."> -->
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 mb-4">
                                                                    <h5 class="font-size-18 text-white">Julio Verne</h5>
                                                                    
                                                                    <p class="mb-0 text-white-50">Escritor, dramaturgo​ y poeta​ francés</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“Seis honrados servidores me enseñaron cuanto sé; sus nombres son cómo, cuándo, dónde, qué, quién y por qué.”</h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <!-- <img src="../../assests/picture/avatar-3.jpg" class="avatar-md img-fluid rounded-circle" alt="..."> -->
                                                                <div class="flex-1 ms-3 mb-4">
                                                                    <h5 class="font-size-18 text-white">Rudyard Kipling</h5>
                                                                    <p class="mb-0 text-white-50">Escritor británico
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="../../assests/js/jquery.min.js"></script>
        <script src="../../assests/js/bootstrap.bundle.min.js"></script>
        <script src="../../assests/js/metisMenu.min.js"></script>
        <script src="../../assests/js/simplebar.min.js"></script>
        <script src="../../assests/js/waves.min.js"></script>
        <script src="../../assests/js/feather.min.js"></script>
        <!-- pace js -->
        <script src="../../assests/js/pace.min.js"></script>

        <!-- Sweet Alerts js -->
        <script src="../../assests/js/sweetalert2.min.js"></script>

        <!-- validation init -->
        <!-- <script src="../../assests/js/validation.init.js"></script> -->
         <!-- validator JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.6.0/validator.min.js"></script>

        <script type="text/javascript" src="registro.js"></script>

    </body>

</html>