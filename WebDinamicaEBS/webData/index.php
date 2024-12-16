<?php
$servername = "ddbbdinamica.cq9xxk5zzujt.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "4Vientos24";
$dbname = "proyectos";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = " SELECT * FROM proyectos";
$result = $conn->query($sql);
$conn->close();
?>

<html lang="es" data-bs-theme="dark">

<head>
    <title>Proyecto 2ºASIR - jQuery Bootstrap</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!--Inicio Librerias JS-->
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/main.js"></script>
    <!--Fin Librerias JS-->
    <header class="p-3 mb-3 border-bottom sticky-top bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="cursor: pointer;">
                    <li><a href="#" class="nav-link px-2 link-body-emphasis"><i class="bi bi-house"></i> Inicio</a></li>
                    <li><a id="btn-proyectos" class="nav-link px-2 link-body-emphasis"><i class="bi bi-kanban"></i>
                            Proyectos</a></li>
                    <li><a id="btn-contacto" class="nav-link px-2 link-body-emphasis"><i
                                class="bi bi-person-lines-fill"></i> Contacto</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="text" class="form-control" placeholder="Buscar..." aria-label="Search"
                        id="search-input">
                </form>
            </div>
        </div>
    </header>
    <main>
        <!--Inicio-->
        <div class="container">
            <br>
            <h1 class="text-center spacing">Hola 👋, Soy Abel </h1>
            <br><br>
            <div class="row align-items-center">
                <div class="col ">
                    <img src="https://placehold.co/300x350" height="350px" width="300px" class="rounded mx-auto d-block"
                        alt="...">
                </div>
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="bi bi-file-person"></i> ¿Quien soy?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Soy un estudiante de informática ubicado en Pamplona, Navarra. En estos momentos
                                    estoy estudiando
                                    Administración de Sistemas Informáticos y Redes en Cuatrovientos.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="bi bi-book"></i> Mis estudios
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Administración de Sistemas Informáticos y Redes</h5>
                                                <small class="text-body-secondary">2023-2025</small>
                                            </div>
                                            <p class="mb-1">Centro Integrado Cuatrovientos</p>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Sistemas Microinformáticos y Redes</h5>
                                                <small class="text-body-secondary">2021-2023</small>
                                            </div>
                                            <p class="mb-1">Salesianos Pamplona</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="bi bi-person-workspace"></i> Experiencia Laboral
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">GRUPO AXIUM</h5>
                                                <small class="text-body-secondary">2024-2024</small>
                                            </div>
                                            <p class="mb-1">Administrador de Sistemas Informáticos</p>
                                            <small class="text-body-secondary">Trabajo temporal de verano</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">INTRAIT SOLUTIONS / FIVERR</h5>
                                                <small class="text-body-secondary">2019 - Actualmente</small>
                                            </div>
                                            <p class="mb-1">Proveedor de servicios y soporte TI</p>
                                            <small class="text-body-secondary">Autónomo. Ingles y Español</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">GRUPO AXIUM</h5>
                                                <small class="text-body-secondary">2023-2023</small>
                                            </div>
                                            <p class="mb-1">Practicas vinculadas a grado medio</p>
                                            <small class="text-body-secondary">Practicas FP DUAL y Administrador de
                                                Sistemas Informáticos</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--Fin Inicio-->
        <!--Inicio Proyectos-->
        <div class="container" id="proyectos">
            <br><br><br>
            <hr class="hr" />
            <br><br>
            <h1 class="text-center">Proyectos</h1>
            <br><br>
            <div class="row align-items-center row-cols-4">
                <?php
                    while ($rows = $result->fetch_assoc()) {
                        ?>
                <!--Agrego los cards de proyectos-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="proyectos\<?php echo $rows['image']; ?>" height="116" width="304" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $rows['title']; ?></h5>
                            <p class="card-text"><?php echo $rows['description']; ?></p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" tabindex="-1"
                                data-bs-target="#<?php echo $rows['title']; ?>">
                                <i class="bi bi-info-circle"></i>Mas Información
                            </button>

                        </div>
                    </div>
                </div>
                    <!--Agrego los cards de informacion-->
                <div class="modal fade" id="<?php echo $rows['title']; ?>"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5"><?php echo $rows['title']; ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                             <?php echo $rows['long_description']; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
        </div>
        <!--Fin Proyectos-->
        <!--Inicio FormContacto-->
        <div class="container" id="contacto">
            <br><br><br>
            <hr class="hr" />
            <br><br>
            <h1 class="text-center">Formulario de Contacto</h1>
            <br><br>
            <div class="row align-items-center">
                <div class="col ">
                    <form class="was-validated" id="contactoFormulario">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback">El valor introducido es válido</div>
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom02" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="validationCustom02" required>
                            <div class="valid-feedback">Correo Válido :)</div>
                        </div>

                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="validationTextarea"
                                placeholder="Es necesario que introduzcas tu mensaje" required></textarea>
                            <div class="valid-feedback">Gracias por tu comentario</div>
                        </div><br>

                        <div class="mb-3">
                            <button type="button" class="btn btn-primary" id="enviarCorreo" disabled>Enviar
                                Formulario</button>
                            <button type="reset" class="btn btn-primary">Limpiar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Fin FormContacto-->

        <!--Inicio Modal Correo-->
        <div class="modal fade" tabindex="-1" id="send-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body  border rounded" style="background-color: #fbfaf7;">
                        <h3 class="text-dark text-center">
                            ¡Enviado con éxito!
                        </h3>
                        <p class="text-dark">Recibirás una respuesta lo antes posible a la dirección de correo indicada
                        </p>
                        <img class="rounded mx-auto d-block" src="./img/check.gif" height="128px" width="128px">
                    </div>
                </div>
            </div>
        </div>
        <!--Fin Modal Correo-->

    </main>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-body-secondary">Abel Lloria Fortea - 2ºASIR 2024</span>
            </div>
        </footer>
    </div>
</body>

</html>