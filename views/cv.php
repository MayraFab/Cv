<?php include(__DIR__ . "/layouts/header.php"); ?>
<div class="container">
<div class="page-inner no-page-title mt-5">
    <div id="main-wrapper">
        <div class="row">
            <div class="col-lg-5 col-xl-3">
                <div class="card card-white grid-margin">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">MI PERFIL</h4>
                    </div>
                    <div class="card-body user-profile-card mb-3">
                        <img src="/formulario_may/assets/img/may.jpeg" class="user-profile-image rounded-circle img-fluid " alt="" />
                        <h4 class="text-center h6 mt-2">Mayra Fabiola Mallqui Paccini</h4>
                        <p class="text-center small">Ingenieria de Software con IA</p>
                        <button class="btn btn-theme btn-sm">Seguir</button>
                        <button class="btn btn-theme btn-sm">Mensaje</button>
                    </div>
                    <hr />
                    <div class="card-heading clearfix mt-3">
                        <h4 class="card-title">Conocimientos en:</h4>
                    </div>
                    <div class="card-body mb-3">
                        <span class="label label-success mb-2">python básico</span>
                        <br>
                        <span class="label label-success mb-2">java básico</span>
                        <br>
                        <span class="label label-success mb-2">PHP básico</span>
                        <br>
                        <span class="label label-success mb-2">Bootstrap</span>
                        <br>
                        <span class="label label-success mb-2">Javascript</span>
                        <br>
                        <span class="label label-success mb-2">HTML básico</span>
                        <br>
                        <span class="label label-success">CSS básico</span>
                        <br>
                        <span class="label label-success">Git hub</span>
                    </div>
                    <hr/>
                    <div class="card-heading clearfix mt-3">
                        <h4 class="card-title">Sobre mí:</h4>
                    </div>
                    <div class="card-body mb-3">
                        <p class="mb-0">Estudiante de 17 años cursando Ingeniería de Software con IA. Motivada por aprender, mejorar mis competencias y enfrentar nuevos retos profesionales. Busco mi primera oportunidad laboral para adquirir experiencia, contribuir con responsabilidad al trabajo en equipo y seguir desarrollandome como persona y profesional.</p>
                    </div>
                    <hr />
                    <div class="card-heading clearfix mt-3">
                        <h4 class="card-title">Información de contacto:</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0 text-muted">
                                <tbody>
                                    <tr>
                                        <th scope="row">Email:</th>
                                        <td>1582403@senati.pe</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Número de celular:</th>
                                        <td>(+51) 936 858 464</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dirección:</th>
                                        <td>Lima-Perú ^^</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-6">
                <div class="card card-white grid-margin">
                <div class="card-body">
                    <?php
                    if(isset($_SESSION['message'])){
                        $messageType = $_SESSION['type'] ?? 'info';
                        $alertClass = $messageType === 'success' ? 'alert-success' : 'alert-danger';
                        ?>
                        <div class="alert <?php echo $alertClass; ?> alert-dismissible fade show" role="alert">
                            <?php echo htmlspecialchars($_SESSION['message']); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php
                        unset($_SESSION['message']);
                        unset($_SESSION['type']);
                    }
                    ?>
                    <form action="/formulario_may/controllers/contactoController.php" method="POST">
                        <div class="post">
                            <input type="text" name="nombre" class="form-control mb-2" placeholder="Tu nombre" required>
                            <input type="email" name="email" class="form-control mb-2" placeholder="Tu email" required>
                            <textarea name="mensaje" class="form-control" placeholder="Escribe un mensaje" rows="4" required></textarea>
                            <div class="post-options"><br>
                                <button type="submit" class="btn btn-outline-primary float-right">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="profile-timeline">
                    <ul class="list-unstyled">
                        <li class="timeline-item">
                            <div class="card card-white grid-margin">
                                <div class="card-body">
                                    <div class="timeline-item-header">
                                        <img src="assets/img/gillian.jpeg" alt="" />
                                        <div class="user-info">
                                            <span class="user-name">Gillian Monzen</span>
                                            <small>Hace 5 horas</small>
                                            <span class="user-action">Publicó un post</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item-post">
                                        <p> El avance de la inteligencia artificial no es una amenaza, sino la herramienta definitiva para desbloquear el verdadero potencial humano. Al delegar tareas repetitivas y complejas a los algoritmos, finalmente tenemos el tiempo y la claridad para enfocarnos en la creatividad, la empatía y la resolución de los grandes problemas globales, desde curar enfermedades hasta frenar el cambio climático. </p>
                                        <div class="timeline-options">
                                            <a href="#"><i class="fa fa-thumbs-up"></i> Like (20)</a>
                                            <a href="#"><i class="fa fa-comment"></i> Comment (2)</a>
                                            <a href="#"><i class="fa fa-share"></i> Share (11)</a>
                                        </div>
                                        <br>
                                        <div class="timeline-comment">
                                            <div class="timeline-comment-header">
                                                <img src="assets/img/sofia.jpeg" alt="" />
                                                <div class="user-info">
                                                    <span class="user-name">Sofia Paccini</span>
                                                    <small>Hace 30 minutos</small>
                                                    <span class="user-action">Comentó el post</span>
                                                </div>
                                            </div>
                                            <p class="timeline-comment-text">Estoy de acuerdo con lo que mencionas. También creo que no estamos siendo reemplazados; estamos siendo aumentados para construir un futuro más eficiente, justo y brillante.</p>
                                        </div>
                                        <div class="timeline-comment">
                                            <div class="timeline-comment-header">
                                                <img src="assets/img/marilyn.jpeg" alt="" />
                                                <div class="user-info">
                                                    <span class="user-name">Marilyn Lopez</span>
                                                    <small>Hace 2 horas</small>
                                                    <span class="user-action">Comentó el post</span>
                                                </div>
                                            </div>
                                            <p class="timeline-comment-text"><p class="timeline-comment-text">En mi caso creo que no estoy segura de que sea bueno que siga avanzando por el impacto del uso de mas IA y su relación con el calentamiento global.</p></p>
                                        </div>
                                        <textarea class="form-control" placeholder="Responde aquí ^^"></textarea>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="card card-white grid-margin">
                                <div class="card-body">
                                    <div class="timeline-item-header">
                                        <img src="assets/img/renato.jpeg" alt="" />
                                        <div class="user-info">
                                            <span class="user-name">Renato Buendia</span>
                                            <small>Hace 4 horas</small>
                                            <span class="user-action">Publicó un post</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item-post">
                                        <p> El mundo virtual es todo un laboratorio infinito de posibilidades donde las barreras físicas desaparecen.</p>
                                        <img src="assets/img/ing.jpeg" alt="" />
                                        <div class="timeline-options">
                                            <a href="#"><i class="fa fa-thumbs-up"></i> Like (22)</a>
                                            <a href="#"><i class="fa fa-comment"></i> Comment (7)</a>
                                            <a href="#"><i class="fa fa-share"></i> Share (9)</a>
                                        </div>
                                        <br>
                                        <div class="timeline-comment-header">
                                            <img src="assets/img/killari.jpeg" alt="" />
                                            <div class="user-info">
                                                <span class="user-name">Killari Ramirez</span>
                                                <small>Hace 1 hora</small>
                                                <span class="user-action">Comentó el post</span>
                                            </div>
                                        </div>
                                        <p class="timeline-comment-text">Es verdad, como va avanzando la tecnologia es increíble.</p>
                                        <textarea class="form-control" placeholder="Responde aquí ^^"></textarea>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 col-xl-3">
                <div class="card card-white grid-margin">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Hobbies</h4>
                    </div>
                    <div class="card-body">
                        <div class="team">
                            <div class="team-member">
                                <img src="assets/img/bajo.jpeg" alt="">
                                <span>Tocar bajo eléctrico.</span>
                            </div>
                            <div class="team-member">
                                <img src="assets/img/contrabajo.jpeg" alt="">
                                <span>Tocar el contrabajo.</span>
                            </div>
                            <div class="team-member">
                                <img src="assets/img/guitarranegra.jpeg" alt="">
                                <span>Tocar la guitarra.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-white grid-margin">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Formación Académica:</h4>
                    </div>
                    <div class="card-body">
                        <p>COLEGIO: I.E.P. Siglo XXI</p>
                        <p>INSTITUTO: SENATI (IV Semestre)</p>
                        <p>INSTITUTO DE INGLÉS: ICPNA (I09)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-footer">
        <p>Derechos de autor © 2026 Todos los derechos reservados :3.</p>
    </div>
</div>
</div>
<?php include("layouts/footer.php"); ?>