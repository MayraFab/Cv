<?php include(__DIR__ . "/includes/header.php"); ?>

<div class="container margin-top-20" style="background-color: darkgrey;">
    <div class="page-inner no-page-title fst-italic mt-4 mb-4" style="box-shadow: 0 0rem 0.9rem rgba(122, 122, 122, 0.65); position: relative; padding: 20px 30px 40px 30px; background-color: #b5b5b5;">
        <div id="main-wrapper">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card card-white grid-margin">
                        <div class="card-heading clearfix">
                            <h4 class="card-title fst-normal">MI PERFIL</h4>
                        </div>
                        <div class="card-body user-profile-card">
                            <img src="/formulario_may/assets/img/may.webp" class="user-profile-image rounded-circle img-fluid" alt="" />
                            <h4 class="text-center h6 mt-2">Mayra Fabiola Mallqui Paccini</h4>
                            <p class="lead fs-6 fst-italic">Ingeniería de Software con IA</p>
                        </div>
                        <ul class="social-icon list-inline d-flex justify-content-center gap-5">
                            <li><a href="https://www.facebook.com/mayrafabiolamallqui" class="social-icon-link fa-brands fa-facebook text-decoration-none"></a></li>
                            <li><a href="https://www.instagram.com/may_paccini/" class="social-icon-link fa-brands fa-instagram text-decoration-none"></a></li>
                            <li><a href="https://www.github.com/MayFab" class="social-icon-link fa-brands fa-github text-decoration-none"></a></li>
                        </ul>
                        <hr />
                        <div class="card-heading clearfix mt-1">
                            <h4 class="card-title fst-normal">Conocimientos en:</h4>
                        </div>
                        <ul class="list-group mb-2">
                            <li class="list-group-item">Python básico</li>
                            <li class="list-group-item">PHP básico</li>
                            <li class="list-group-item">Bootstrap</li>
                            <li class="list-group-item">Javascript</li>
                            <li class="list-group-item">HTML básico</li>
                            <li class="list-group-item">CSS básico</li>
                            <li class="list-group-item">GitHub</li>
                        </ul>
                        <button id="btnclick">Click!</button>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card card-white grid-margin">
                        <div class="card-heading clearfix">
                            <h4 class="card-title fst-normal">Sobre mí:</h4>
                        </div>
                        <div class="card-body mb-3">
                            <p class="mb-0 lh-base">
                                Estudiante de 17 años cursando Ingeniería de Software con IA. Motivada por aprender,
                                mejorar mis competencias y enfrentar nuevos retos profesionales. Busco mi primera
                                oportunidad laboral para adquirir experiencia, contribuir con responsabilidad al
                                trabajo en equipo y seguir desarrollándome como persona y profesional.
                            </p>
                        </div>

                        <div id="carrusel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/php.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/ing.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/web.webp" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>

                        <hr />
                        <div class="card-heading clearfix">
                            <h4 class="card-title fst-normal">Formación Académica:</h4>
                        </div>
                        <div class="card-body">
                            <p>COLEGIO: I.E.P. Siglo XXI</p>
                            <p>INSTITUTO: SENATI (IV Semestre)</p>
                            <p>INSTITUTO DE INGLÉS: ICPNA (I09)</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card card-white grid-margin">
                        <div class="card-heading clearfix">
                            <h4 class="card-title fst-normal">Hobbies:</h4>
                        </div>
                        <div class="card-body">
                            <div class="team-member d-flex align-items-center gap-3">
                                <img src="assets/img/bajo.webp" class="img-fluid" style="width: 80px;" alt="">
                                <div>
                                    <p class="mb-0">Tocar bajo eléctrico</p>
                                    <div class="badge" style="background-color: DarkBlue;">Nivel intermedio</div>
                                </div>
                            </div>
                            <div class="team-member d-flex align-items-center gap-3">
                                <img src="assets/img/contrabajo.webp" class="img-fluid" style="width: 80px;" alt="">
                                <div>
                                    <p class="mb-0">Tocar contrabajo</p>
                                    <div class="badge" style="background-color: DarkBlue;">Nivel básico</div>
                                </div>
                            </div>
                            <div class="team-member d-flex align-items-center gap-3">
                                <img src="assets/img/guitarranegra.webp" class="img-fluid" style="width: 80px;" alt="">
                                <div>
                                    <p class="mb-0">Tocar guitarra</p>
                                    <div class="badge" style="background-color: DarkBlue;">Nivel básico</div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="card-heading clearfix mt-2">
                            <h4 class="card-title fst-normal">Información de contacto:</h4>
                        </div>
                        <div class="card-body">
                            <div class="team-icon gap-5">
                                <img src="assets/img/correo.webp" style="width: 20px" alt=" ">
                                <strong class="fst-normal">Correo:</strong><br>

                                <a href="mailto:1582403@senati.pe" class="text-decoration-underline text-dark"><span>1582403@senati.pe</span></a>
                            </div>
                            <br>
                            <div class="">
                                <img src="assets/img/telefono.webp" style="width: 20px" alt=" ">
                                <strong class="fst-normal">Teléfono:</strong><br>
                                <span>(+51) 936 858 464</span>
                            </div>
                            <br>
                            <div class="team-icon">
                                <img src="assets/img/direccion.webp" style="width: 20px" alt=" ">
                                <strong class="fst-normal">Dirección:</strong><br>
                                <span>Lima - Perú</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center mt-4">
                <a href="#top" id="botonArriba" class="btn bg-dark-subtle btn-outline-dark btn-fixed rounded-circle d-xxl-none" style="position: fixed; bottom: 20px; right: 20px; display: block; z-index: 1000;"> ↑ </a>
            </div>

        </div>
        <div class="page-footer text-center">
            <p>Derechos de autor © 2026 Todos los derechos reservados.</p>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>