<!DOCTYPE html>
<html lang="es">

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
                                    <li><a class="dropdown-item" href="../admin/index.html"><i
                                                class="fa-solid fa-shield-halved"></i>Admin</a></li>
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
                            <li class="nav-item"><a class="nav-link" href="emblemasAdmin.html"><i
                                        class="fa-solid fa-certificate"></i>Editar Emblemas</a>
                            </li>
                        </ul>
                    </div>
        </nav>
        <!--Header Menu-->

    </header>
    <div class="container overflow-hidden text-center py-3" id="cuerpo">
        <div>
            <h1>Emblemas</h1>
        </div>
        <div>
            <div class=" d-flex justify-content-end">

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Añadir emblema
                </button>
            </div>
                <?php

                

                ?>
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">Emblemas</th>
                        <th scope="col">Medalla</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Curso 1</td>
                        <td><img src="../images/emblemas/1.png" alt="emblema1" width="40" height="40"></td>
                        <td><button type="button"><img src="../images/botons/edit.png"></button><button type="button"
                                class="ms-4"><img src="../images/botons/delete.png"></button></td>
                    </tr>
                    <tr>
                        <td>Curso 2</td>
                        <td><img src="../images/emblemas/2.png" alt="emblema2" width="40" height="40"></td>
                        <td><button type="button"><img src="../images/botons/edit.png"></button><button type="button"
                                class="ms-4"><img src="../images/botons/delete.png"></button></td>
                    </tr>
                    <tr>
                        <td>Curso 3</td>
                        <td><img src="../images/emblemas/3.png" alt="emblema3" width="40" height="40"></td>
                        <td><button type="button"><img src="../images/botons/edit.png"></button><button type="button"
                                class="ms-4"><img src="../images/botons/delete.png"></button></td>
                    </tr>
                    <tr>
                        <td>Curso 4</td>
                        <td><img src="../images/emblemas/4.png" alt="emblema4" width="40" height="40"></td>
                        <td><button type="button"><img src="../images/botons/edit.png"></button><button type="button"
                                class="ms-4"><img src="../images/botons/delete.png"></button></td>
                    </tr>
                    <tr>
                        <td>Curso 5</td>
                        <td><img src="../images/emblemas/5.png" alt="emblema5" width="40" height="40"></td>
                        <td><button type="button"><img src="../images/botons/edit.png"></button><button type="button"
                                class="ms-4"><img src="../images/botons/delete.png"></button></td>
                    </tr>
                    <tr>
                        <td>Curso 6</td>
                        <td><img src="../images/emblemas/6.png" alt="emblema6" width="40" height="40"></td>
                        <td><button type="button"><img src="../images/botons/edit.png"></button><button type="button"
                                class="ms-4"><img src="../images/botons/delete.png"></button></td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir un emblema</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="h3 mb-3 text-start">Emblema</p>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success">+ Añadir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>