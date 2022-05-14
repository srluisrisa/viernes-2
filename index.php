<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Electric Zone</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpeg" />
    <!-- Bootstrap-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    
</head>

<body>
    


    <a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-primary" id="carrito">0</span></a>

    <div class="container">
        
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Electric Zone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                        <a href="#" class="nav-link" category="all" style="color:#ea5156">Todo</a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                        <a href="instalacion.php" class="nav-link" category="all">Contacto</a>
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
        <div class="container px-1 px-lg-1 my-2">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"><img src="admin/img/logo.png" alt="Electric Zone" height="50" width="250"></h1>
                <p class="lead fw-normal text-white-50 mb-0">Una Television en cada hogar.</p>
                <br>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- indicadores -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- carrusel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="admin/img/promo1.jpg" alt="Promocion 1" class="d-block" style="width:100%" width="100" height="400">
  </div>
  <div class="carousel-item">
    <img src="admin/img/promo2.webp" alt="Promocion 2" class="d-block" style="width:100%" width="100" height="400">
  </div>
  <div class="carousel-item">
    <img src="admin/img/promo3.webp" alt="Promocion 3" class="d-block" style="width:100%" width="100" height="400">
  </div>
</div>

<!-- icnos de los controles -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>



            </div>
        </div>
    </header>
    
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">

                                <!--<div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">  < ? php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>-->

                                <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
    
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>

                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
              
                                        <!--<span class="text-muted text-decoration-line-through">< ?php echo $data['precio_normal'] ?></span>-->
                                        $<?php echo $data['precio_rebajado'] ?> MXN
                                    </div>
                                </div>
                   
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>


<div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <img class="card-img-top" src="admin/img/instalacion.jpg" alt="..." />
                        
                                <div class="card-body p-4">
                                    <div class="text-center">
                                
                                        <h5 class="fw-bolder">Contacto</h5>
                                        <p><?php echo "Contacto y servicio de instalacion";?></p>
                              
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        
                                        <?php echo "Precio depende del Servicio de instalacion"; ?>
                                    </div>
                                </div>

                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="instalacion.php">Ver mas</a></div>
                                </div>
                            </div>
                        </div>


            </div>
            
        </div>
    </section>

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