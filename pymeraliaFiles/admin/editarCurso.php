<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css"><!--bootstrap-->
    <script src="../scripts/bootstrap.bundle.min.js"></script><!--bootstrap-->
    <link rel="stylesheet" href="../css/main copy.css">
    <link href="../css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/brands.min.css" rel="stylesheet">
    <link href="../css/solid.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="../scripts/editarCurso.js"></script>
    <link rel="stylesheet" href="../css/main.css"><!--header, footer-->
    <title>Editar curso</title>
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
                                    <li><a class="dropdown-item" href="../cliente/index.php"><i
                                    class="fa-solid fa-shield-halved"></i>Modo Usuario</a></li>
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
                          <li class="nav-item"><a class="nav-link" href="index.php"><i
                                        class="fa-solid fa-house"></i>Inicio</a></li>
                          <li class="nav-item"><a class="nav-link" href="cursos.php.php"><i
                                        class="fa-solid fa-graduation-cap"></i>Listado Cursos</a></li>
                          <li class="nav-item"><a class="nav-link" href="usuariosCurso.php"><i
                                          class="fa-solid fa-users"></i>Listado Alumnos</a></li>
                          <li class="nav-item"><a class="nav-link" href="crearActividad.php"><i 
                              class="fa-solid fa-circle-plus"></i>Crear Actividad</a></li>
                          <li class="nav-item"><a class="nav-link" href="editarCurso.php"><i
                                        class="fa-solid fa-award"></i>Editar Curso</a></li>
                          <li class="nav-item"><a class="nav-link" href="editarNotaUsuarios.php"><i
                                        class="fa-solid fa-star"></i>Editar Nota</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="emblemasAdmin.php"><i
                                class="fa-solid fa-certificate"></i>Editar Emblemas</a>
                    </li>
                        </ul>
                    </div>
        </nav>
        <!--Header Menu-->
  
    </header><!--header-->

    <div class="container mt-3" id="form-editar-curso">
        <h2>Editar curso</h2>
        <div class="row" id="row-buttons">
            <div class="col-md-12">
                <button class="btn btn-secondary btn-lg" onclick="validarInputObligatorio()">Guardar cambios</button>
                <button class="btn btn-secondary btn-lg">Eliminar curso</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <h4>Nombre del curso</h4>
                <input id="nombre-curso" class="form-control" placeholder="Nombre actual: Ciberseguridad" type="text">  
            </div>
            <div class="col-12 col-md-12">
                <h4>Enlaces (max. 4)</h4>
                <input class="form-control" placeholder="Enlaces actuales" type="url">
                <input class="form-control" placeholder="Enlaces actuales" type="url">
                <input class="form-control" placeholder="Enlaces actuales" type="url">
                <input class="form-control" placeholder="Enlaces actuales" type="url"> 
            </div>
            <div class="col-12 col-md-12">
                <h4>Imagen curs<input class="form-control" value="Hola" type="file"></h4> 
            </div>
            <div class="col-12 col-md-12">
                <h4>Emblema<input class="form-control" value="Hola" type="file"></h4> 
            </div>
        </div>
    </div>

    <footer class="bg-black text-center text-lg-center mt-auto">
        <div class="text-center p-3">
            <div class="fluid-container">
                <div class="row">
                    <div id="logo-footer" class="col-6 col-md-3 d-flex flex-wrap align-items-center justify-content-center">
                        <a class="text-light" href="index.php"><img src="../images/logo_pymeshield_black.png"
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
    </footer><!--footer-->
</body>

</html>