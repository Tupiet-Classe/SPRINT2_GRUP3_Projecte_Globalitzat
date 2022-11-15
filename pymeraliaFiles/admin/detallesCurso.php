<!DOCTYPE html>
<html lang="es">
<?php
include("../clases/Curs_class.php");

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVA Pymeralia</title>
    <script src="../scripts/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="../css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/brands.min.css" rel="stylesheet">
    <link href="../css/solid.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../css/detallesCursos.css">

</head>

<body class="d-flex flex-column min-vh-100">
    <header class="sticky-top">
        <div class="navbar navbar-expand-sm p-0" id="header-logo">
            <div class="container-fluid d-flex flex-row justify-content-between navbar-nav ">
                <div class="p-2" id="logo">
                    <li class="nav-item"><a class="nav-link" href="#"><img src="../images/logo_pymeshield.png"
                                alt="Logo" class="d-inline-block align-text-middle">
                            pymeshield</a></li>
                </div>

                <!--Ruptura del responsive en 576px a 575px-->
                <div class="p-2">
                    <div class="container" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2" style="--bs-scroll-height: 100px;">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="menu-dropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                                <ul class="dropdown-menu" id="menu-user">
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-address-card"></i>Editar
                                            Perfil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-language"></i>Idioma</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-palette"></i>Tema</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-right-from-bracket"></i>Cerrar Sesión</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../cliente/index.html"><i
                                                class="fa-solid fa-shield-halved">
                                            </i>Modo Usuario</a>
                                    </li>
                                </ul>
                            </li>
                    </div>
                </div>
            </div>
        </div>
        <!--Header Logo-->


        <nav class="navbar navbar-expand-lg p-0" id="main-navbar">
            <div class="container-fluid">
                <span class="p-2">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button></span>
                <div class="collapse navbar-collapse p-0" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html"><i
                                    class="fa-solid fa-house"></i>Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="dashboardCurso.html"><i
                                    class="fa-solid fa-graduation-cap"></i>Listado Cursos</a></li>
                        <li class="nav-item"><a class="nav-link" href="usuariosCurso.html"><i
                                    class="fa-solid fa-users"></i>Listado Alumnos</a></li>
                        <li class="nav-item"><a class="nav-link" href="crearActividad.html"><i
                                    class="fa-solid fa-circle-plus"></i>Crear Actividad</a></li>
                        <li class="nav-item"><a class="nav-link" href="editarCurso.html"><i
                                    class="fa-solid fa-award"></i>Editar Curso</a></li>
                        <li class="nav-item"><a class="nav-link" href="editarNotaUsuarios.html"><i
                                    class="fa-solid fa-star"></i>Editar Nota</a>
                        </li>
                        
                    </ul>
                </div>
        </nav>
        <!--Header Menu-->

    </header>
    <!--header-->

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="successToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header toast-success">
            <strong class="me-auto">Pymeshield</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            El usuario se ha añadido correctamente
          </div>
        </div>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="errorToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header toast-error">
            <strong class="me-auto">Pymeshield</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Los datos introducidos no corresponden a ningún usuario
          </div>
        </div>
    </div>

    <main class="row m-0">
        <aside class="container col-lg-4 col-xxl-3 pt-5 px-5">
            <div class="admin-course-tools rounded-3 p-3">
                <h3>Acciones rápidas</h3>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button class="nav-link btn" href="addUsuarioCurso.html" data-bs-toggle="modal"
                            data-bs-target="#addUser">
                            <i class="fa-solid fa-user-plus"></i>Añadir alumno
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuariosCurso.html">
                            <i class="fa-solid fa-users"></i>Listado de alumnos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crearActividad.html">
                            <i class="fa-solid fa-circle-plus"></i>Crear Actividad
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editarCurso.html">
                            <i class="fa-solid fa-award"></i>Editar Curso
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editarNotaUsuarios.html">
                            <i class="fa-solid fa-star"></i>Editar Nota
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <?php
        $curs = New Curs(1);
        $curs -> showAllRecursos();

?>
        <div class="course container col-lg-8 col-xxl-9 p-5">
            <h1 id="course-title">La ciberseguridad es importante</h1>
           
            <div class="course-element text ">
                <a >
                    <div class = "d-flex justify-content-end h5 ">
                        
                        <div class="btn-group dropstart">
                            <button type="button" class="fas fa-ellipsis-v ps-2 pe-2" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu">
                                <li><button type="button" ><i class="fas fa-trash-alt"></i>Eliminar</button></li>
                                <button ><i class="fas fa-edit"></i>Editar</button>
                                
                            </ul>
                          </div>
                    </div>

                </a>
                <h4>La ciberseguridad</h4>
                <p>La seguridad informática, también conocida como ciberseguridad, es el
                    área relacionada con la informática y la telemática que se enfoca en la protección de la
                    infraestructura computacional y todo lo vinculado con la misma, y especialmente la
                    información contenida en una computadora o circulante a través de las redes de
                    computadoras.2 Para ello existen una serie de estándares, protocolos, métodos, reglas,
                    herramientas, y leyes concebidas para minimizar los posibles riesgos a la infraestructura
                    y/o a la propia información. La ciberseguridad comprende software (bases de datos,
                    metadatos, archivos), hardware, redes de computadoras, y todo lo que la organización
                    entienda y valore como un riesgo si la información confidencial involucrada pudiera
                    llegar a manos de otras personas, por ejemplo, convirtiéndose así en información privilegiada.</p>
            </div>

            <div class="course-element text">
                <a >
                    <div class = "d-flex justify-content-end h5 ">
                        
                        <div class="btn-group dropstart">
                            <button type="button" class="fas fa-ellipsis-v ps-2 pe-2" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu">
                                <li><button type="button" ><i class="fas fa-trash-alt"></i>Eliminar</button></li>
                                <button ><i class="fas fa-edit"></i>Editar</button>
                                
                            </ul>
                          </div>
                    </div>

                </a>
                <h4>La importancia de la Ciberseguridad</h4>
                <p>El crecimiento global de las redes y la información, impulsado por la innovación
                    tecnológica, ha permitido a la sociedad crear prosperidad y mejorar la calidad de vida.
                    Sin embargo, este rápido cambio ha generado también un desafío de largo plazo: gestionar
                    los riesgos de seguridad a medida que el mundo depende cada vez más de la cibernética y las amenazas
                    aumentan.</p>
                <p>Los líderes empresariales internacionales calificaron las amenazas cibernéticas como uno de los
                    principales
                    riesgos
                    de negocios de acuerdo con los resultados obtenidos en la 21a Encuesta Global de CEO de PwC.</p>
            </div>

            <div class="course-element d-flex justify-content-center flex-column">
                <a >
                    <div class = "d-flex justify-content-end h5 ">
                        
                        <div class="btn-group dropstart">
                            <button type="button" class="fas fa-ellipsis-v ps-2 pe-2" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu">
                                <li><button type="button" ><i class="fas fa-trash-alt"></i>Eliminar</button></li>
                                <button ><i class="fas fa-edit"></i>Editar</button>
                                
                            </ul>
                          </div>
                    </div>

                </a>
                <h4>Tutorial sobre ciberseguridad</h4>
                <video class="video" width="100%" height="400">
                    <source src="../Video/video.mp4">
                </video>

                <div class="d-flex justify-content-center mt-3">
                    <button class="orange-button" onclick="playVid()">Play</button>
                    <button class="orange-button" onclick="pauseVid()">Pause</button>
                </div>
            </div>

            <div class="course-element file">
                <a >
                    <div class = "d-flex justify-content-end h5 ">
                        
                        <div class="btn-group dropstart">
                            <button type="button" class="fas fa-ellipsis-v ps-2 pe-2" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu">
                                <li><button type="button" ><i class="fas fa-trash-alt" onclick=""></i>Eliminar</button></li>
                                <button ><i class="fas fa-edit"></i>Editar</button>
                                
                            </ul>
                          </div>
                    </div>

                </a>
                <h4>Información adicional</h4>
                <p>Este documento es importante porque incluye más información</p>
                <!-- Boton para Descargar actividad-->
                <a class="orange-button" href="../actividades/file.doc" download="GFG">Descargar documento</a>
            </div>

            <div class="course-element activity">
                <a >
                    <div class = "d-flex justify-content-end h5 ">
                        
                        <div class="btn-group dropstart">
                            <button type="button" class="fas fa-ellipsis-v ps-2 pe-2" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu">
                                <li><button type="button" ><i class="fas fa-trash-alt"></i>Eliminar</button></li>
                                <button ><i class="fas fa-edit"></i>Editar</button>
                                
                            </ul>
                          </div>
                    </div>

                </a>
                <h4>Protégete de los ataques</h4>
                <p>¿Estás listo? Aquí tienes una actividad a realizar para ver si estás listo.</p>
                <a class="orange-button">Realizar actividad</a>
            </div>
        </div>
    </main>



    <footer class="bg-black text-center text-lg-center mt-auto">
        <div class="text-center p-3">
            <div class="fluid-container">
                <div class="row">
                    <div id="logo-footer" class="col-6 col-md-3">
                        <a class="text-light" href="index.html"><img src="../images/logo_pymeshield_black.png"
                                alt="Logo" width="50px" style="margin-right: 5px;"
                                class="d-inline-block align-text-middle"><i class="fa-solid fa-copyright"></i>pymeshield
                            by Pymeralia</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <h6 id="title-footer">Acerca de Pymeralia</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-light">Política de privacidad</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Política de cookies</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Aviso legal</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Ley de protección</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h6 id="title-footer">Contacto</h6>
                        <p><i class="fa-solid fa-phone"></i>682849274 <br> <i
                                class="fa-solid fa-envelope"></i>support@pymeralia.com</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <h6 id="title-footer">RRSS</h6>
                        <ul class="list-unstyled mb-0" id="footer-rrss">
                            <li>
                                <a class="text-light" href="#"><i class="fa-brands fa-tiktok"></i></a>
                                <a class="text-light" href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            </li>
                            <li>
                                <a class="text-light" href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a class="text-light" href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Hidden divs -->

    <!-- Add user to course div -->
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addUserLabel">Añadir usuario al curso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addUserForm" action="../PHP/asignarCurso.php" method="post">
                        <div class="md-3">
                            <label for="userToAdd" class="col-form-label">Nombre de usuario o correo electrónico</label>
                            <input type="text" class="form-control" name="usertoadd" id="userToAdd">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btn-add-user">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <span id="courseId" style="display: none;">4</span>

    <script src="../scripts/detallesCurso.js"></script>

    <script>


        function playVid() {
            video.play();
        }

        function pauseVid() {
            video.pause();
        } 
    </script>
</body>

</html>