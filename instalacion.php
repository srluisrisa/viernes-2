<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contacto</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpeg" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
   

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Electric Zone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <a href="index.php" class="nav-link" category="all">Tienda</a>
                    <a href="instalacion.php" class="nav-link" category="select">Contacto</a>
                        <a href="nosotros.php" class="nav-link" category="all">Nosotros</a>

                    </ul>
                    
                </div>
                <div style='text-align:right'>
                    <a href="admin/index.php" class="nav-link" category="all" style="color:BLACK" text-align="right">Entrar</a>
                        </div>
            </div>
        </nav>
    </div>

    <header class="bg-dark py-2">
        <div class="container px-1 px-lg-1 my-1">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Contacto</h1>
            </div>
        </div>
    </header>

    <br>

    <p class="text-center w-responsive mx-auto mb-5">¿Tiene usted alguna pregunta? Por favor, no dude en contactarnos directamente. Nuestro equipo le responderá dentro de
        cuestión de horas para ayudarlo.</p>




        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" action="https://formspree.io/f/mjvlpayd"
            method="POST">
                    <fieldset>
                        <legend class="text-center header">Datos</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="Nombre" type="text" placeholder="Nombre" class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="Apellido" type="text" placeholder="Apellido" class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="Correo Electronico" type="email" placeholder="Correo Electronico" class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="Telefono" type="text" placeholder="Telefono" class="form-control" required>
                            </div>
                        </div>
                        <br>

                        <a>Motivo</a><br>
                        <input type="radio" id="Instalación" name="Motivo" value="Instalación">
                        <label>Instalación</label><br>
                        <input type="radio" id="Contacto" name="Motivo" value="Contacto">
                        <label>Contacto</label><br>

                        <br>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="Mensaje" name="Mensaje" placeholder="Introduzca su mensaje aqui, para nosotros. Nos pondremos en contacto con usted." rows="7" required></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-danger btn-lg" onclick="document.getElementById('contact-form').submit();">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <h4>Direccion</h4>
                        <div>
                        Bahía de Los Angeles 121, Carlos Pacheco 8, 22890<br />
                        Ensenada, BC<br />
                        Telefono (646) 123 45 67<br />
                        electriczoneens@gmail.com<br />
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1025.2631813085443!2d-116.5965231707628!3d31.816241938424366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d88e17841b8261%3A0x3405bbd4ff295f75!2sBah%C3%ADa%20de%20Los%20Angeles%20121%2C%20Carlos%20Pacheco%208%2C%2022890%20Ensenada%2C%20B.C.!5e1!3m2!1ses-419!2smx!4v1651645696017!5m2!1ses-419!2smx"
                        width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


     
<br>

    </div>
    
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Electric Zone 2022</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>