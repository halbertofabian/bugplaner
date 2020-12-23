<body class="login">
    <div class="wrapper wrapper-login wrapper-login-full p-0">
        <div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-primary-gradient">
            <h1 class="title fw-bold text-white mb-3">BUGPLANER</h1>
            <p class="subtitle text-white op-7"><i>Sus decisiones marcan a méxico y sus acciones invitan al resto</i></p>
        </div>
        <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
            <div class="container container-login container-transparent animated fadeIn">
                <h3 class="text-center">Iniciar sesión</h3>
                <form action="" method="post">
                    <div class="login-form">
                        <div class="form-group">
                            <label for="usr_correo" class="placeholder"><b>Usuario</b></label>
                            <input id="usr_correo" name="usr_correo" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="usr_clave" class="placeholder"><b>Contraseña</b></label>
                            <!-- <a href="#" class="link float-right">Forget usr_clave ?</a> -->
                            <div class="position-relative">
                                <input id="usr_clave" name="usr_clave" type="password" class="form-control" required>
                                <div class="show-password">
                                    <i class="icon-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">


                            <!-- <a href="#" class="btn btn-primary w-100 fw-bold">Crear mi cuenta</a> -->
                            <input type="submit" class="btn btn-primary float-right" value="Iniciar sesión" name="btnAccederSistema">


                        </div>
                        <br>
                        <br>
                        <div class="login-account">
                            <span class="msg">¿Aún no tienes una cuenta?</span>
                            <a href="#" id="show-signup" class="link">Creala aquí</a>
                        </div>
                    </div>
                    <?php
                    $acceder = new UsuariosControlador();
                    $acceder->ctrAccederSistema();
                    ?>
                </form>
            </div>

            <div class="container container-signup container-transparent animated fadeIn">
                <h3 class="text-center">Mi cuenta</h3>
                <form action="" method="post">
                    <div class="login-form">
                        <div class="form-group">
                            <label for="usr_nombre" class="placeholder"><b>Nombre completo</b></label>
                            <input id="usr_nombre" name="usr_nombre" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="usr_correo" class="placeholder"><b>Correo / usuario</b></label>
                            <input id="usr_correo" name="usr_correo" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="usr_clave" class="placeholder"><b>Contraseña</b></label>
                            <div class="position-relative">
                                <input id="usr_clave" name="usr_clave" type="password" class="form-control" required>
                                <div class="show-password">
                                    <i class="icon-eye"></i>
                                </div>
                            </div>
                        </div>


                        <div class="row form-action">
                            <div class="col-md-6">
                                <a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Cancelar</a>
                            </div>
                            <div class="col-md-6">
                                <!-- <a href="#" class="btn btn-primary w-100 fw-bold">Crear mi cuenta</a> -->
                                <input type="submit" class="btn btn-primary" value="Crear mi cuenta" name="btnAgregarUsuario">
                            </div>
                        </div>
                    </div>
                    <?php
                    $crearCuenta = new UsuariosControlador();
                    $crearCuenta->ctrAgregarUsuarios();
                    ?>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo HTTP_HOST ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?php echo HTTP_HOST ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?php echo HTTP_HOST ?>assets/js/core/popper.min.js"></script>
    <script src="<?php echo HTTP_HOST ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?php echo HTTP_HOST ?>assets/js/atlantis.min.js"></script>
</body>