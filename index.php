<?php
include_once 'config.php';

require_once 'modelo/registro.modelo.php';
require_once 'modelo/usuarios.modelo.php';

require_once 'controlador/app.controlador.php';
require_once 'controlador/registro.controlador.php';
require_once 'controlador/usuarios.controlador.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>BugPlaner</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?php echo HTTP_HOST  ?>assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?php echo HTTP_HOST  ?>assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo HTTP_HOST  ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo HTTP_HOST  ?>assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo HTTP_HOST  ?>assets/css/demo.css">
    <!-- Toastr -->
    <link href="<?php echo HTTP_HOST   ?>assets/js/plugin/toastr/build/toastr.min.css" rel="stylesheet" />

    <script src="<?php echo HTTP_HOST . 'assets/js/sweetalert.min.js' ?>"></script>

    <link href="<?php echo HTTP_HOST ?>assets/js/plugin/summernote-2/summernote-lite.min.css" rel="stylesheet">

</head>
<?php if (isset($_SESSION['session']) && $_SESSION['session']) : ?>

    <body>

        <div class="wrapper">
            <div class="main-header">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="blue">

                    <a href="" class="logo">
                        <i class="fa fa-bug text-light" aria-hidden="true"> BugPlaner</i>
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                    </button>
                    <!-- <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button> -->
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="icon-menu"></i>
                        </button>
                    </div>
                </div>

                </nav>
                <!-- End Navbar -->
            </div>

            <!-- Sidebar -->
            <div class="sidebar sidebar-style-2">
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <div class="user">
                            <div class="avatar-sm float-left mr-2">
                                <div class=" rounded-circle"><span>H</span></div>
                            </div>
                            <div class="info">
                                <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                    <span>
                                        <p><?php echo $_SESSION['session_usr']['usr_nombre'] ?></p>
                                        <span class="user-level"></span>
                                        <br>
                                        <!-- <span class="caret"></span> -->
                                    </span>

                                </a>

                            </div>
                        </div>
                        <ul class="nav nav-primary">


                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Ménu</h4>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo HTTP_HOST ?>">
                                    <i class="fas fa-desktop"></i>
                                    <p>Inicio</p>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo HTTP_HOST . 'lista' ?>">
                                    <i class="fas fa-desktop"></i>
                                    <p>Hábitos - Plan de acción</p>

                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo HTTP_HOST . 'calendario' ?>">
                                    <i class="fas fa-desktop"></i>
                                    <p>Calendario</p>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo HTTP_HOST . 'salir' ?>">
                                    <i class="fas fa-exit"></i>
                                    <p>Salir</p>

                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->

            <div class="main-panel">
                <div class="content">

                    <?php
                    $rutas = array();
                    if (isset($_GET['ruta'])) {
                        echo
                        '<div class="div-back">
                            <a href="javascript:history.back()" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                Atras
                            </a>
                        </div>';
                        $rutas = explode("/", $_GET['ruta']);
                        if (
                            $rutas[0] == 'lista' ||
                            $rutas[0] == 'salir' ||
                            $rutas[0] == 'avance' ||
                            $rutas[0] == 'time-line' ||
                            $rutas[0] == 'calendario'
                        ) {

                            include_once 'vista/' . $rutas[0] . '.php';
                        } else {
                            echo "ERROR 404";
                        }
                    } else {
                        include_once 'vista/dashboard.php';
                    }
                    ?>


                </div>
                <!-- Footer -->

                <a class='flotante btn btn-dark' data-toggle="modal" data-target="#exampleModal" href='#'>+</a>

            </div>

            <!-- Custom template | don't include it in your project! -->

            <!-- End Custom template -->
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Habitos -Plan de vida</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="formRegistro" method="post">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="rgt_descripcion">Descripción</label>
                                <input type="text" name="rgt_descripcion" id="rgt_descripcion" class="form-control" placeholder="Escribe tu hábito o plan de acción" required>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="rgt_tipo" id="tipo_pnr_h" value="h" required> <label for="tipo_pnr_h">Hábito</label>
                                <input type="radio" name="rgt_tipo" id="tipo_pnr_p" value="p" required> <label for="tipo_pnr_p">Plan de acción </label>
                            </div>
                            <div class="container-habito d-none">
                                <div class="form-group">
                                    <label for="rgt_recordatorio_h">Intervalo de avances</label>
                                    <select name="rgt_recordatorio_h" id="rgt_recordatorio_h" class="form-control">
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>MENSUAL</option>
                                        <option>ANUAL</option>
                                    </select>
                                </div>

                            </div>
                            <div class="container-plan d-none">
                                <div class="alert alert-default" role="alert">
                                    <strong>Proyección</strong>
                                </div>


                                <div class="form-group">
                                    <label for="rgt_plazos"></label>
                                    <select class="form-control" name="rgt_plazos" id="rgt_plazos">
                                        <option>Meta 1 (Corto plazo)</option>
                                        <option>Meta 2 (Mediano plazo)</option>
                                        <option>Meta 3 (Largo plazo)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="rgt_fecha_limite">Fecha limite</label>
                                    <input type="date" name="rgt_fecha_limite" id="rgt_fecha_limite" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="rgt_recordatorio_p">Intervalo de avances</label>
                                    <select name="rgt_recordatorio_p" id="rgt_recordatorio_p" class="form-control">
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>MENSUAL</option>
                                        <option>ANUAL</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary float-right">Guardar</button>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
                </div>
            </div>
        </div>


        <!--   Core JS Files   -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="<?php echo HTTP_HOST  ?>assets/js/core/popper.min.js"></script>
        <script src="<?php echo HTTP_HOST  ?>assets/js/core/bootstrap.min.js"></script>

        <!-- jQuery UI -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

        <!-- jQuery Scrollbar -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


        <!-- Chart JS -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/chart.js/chart.min.js"></script>

        <!-- jQuery Sparkline -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Circle -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/chart-circle/circles.min.js"></script>

        <!-- Datatables -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/datatables/datatables.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- jQuery Vector Maps -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

        <!-- Sweet Alert -->
        <!-- <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script> -->
        <!-- Toastr -->
        <script src="<?php echo HTTP_HOST   ?>assets/js/plugin/toastr/build/toastr.min.js"></script>
        <!-- Atlantis JS -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/atlantis.min.js"></script>

        <!-- Atlantis DEMO methods, don't include it in your project! -->
        <script src="<?php echo HTTP_HOST  ?>assets/js/setting-demo.js"></script>
        <script src="<?php echo HTTP_HOST  ?>assets/js/demo.js"></script>


        <script src="<?php echo HTTP_HOST  ?>assets/js/plugin/summernote-2/summernote-lite.min.js"></script>
        <script src="<?php echo HTTP_HOST  ?>assets/js/main.js"></script>

        <script>
            $(".btnMetaCumplida").on("click", function() {
                var rgt_id = $(this).attr("rgt_id")

                var datos = new FormData()

                datos.append('rgt_id', rgt_id)
                datos.append('rgt_meta_estado', 1)
                datos.append('btnMetaCumplida', true)

                $.ajax({

                    url: './ajax/ajax.registro.php',
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    beforeSend: function() {},
                    success: function(res) {
                        if (res) {
                            toastr.success('Felicidades meta cumplida', 'Muy bien!')

                            setTimeout(function() {
                                location.href = './lista'
                            }, 1000);
                        } else {
                            toastr.error('Intenta de nuevo', '¡Error!')

                        }
                    },
                })
            })

            $(".btnMetaNoCumplida").on("click", function() {
                var rgt_id = $(this).attr("rgt_id");
                swal({
                        title: "¿Estás seguro de no continuar con la meta?",
                        text: "Tomate tu tiempo...",
                        icon: "warning",
                        buttons: ['No, cancelar', 'Si, no cumplir meta'],
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal(" Escribe el motivo por el cual no terminarás esta meta", {
                                    content: "input",
                                })
                                .then((value) => {
                                    if (value != "") {

                                        var rgt_nota = value;

                                        var datos = new FormData();

                                        datos.append("rgt_id", rgt_id);
                                        datos.append("rgt_nota", rgt_nota);
                                        datos.append("btnMetaNoCumplida", true);

                                        $.ajax({
                                            type: "POST",
                                            url: './ajax/ajax.registro.php',
                                            data: datos,
                                            cache: false,
                                            dataType: "json",
                                            processData: false,
                                            contentType: false,
                                            beforeSend: function() {

                                            },
                                            success: function(res) {

                                                if (res) {


                                                    toastr.success('Meta abandonada. Recuerda nunca es tarde para volver ', '¡Muy bien!')

                                                    setTimeout(function() {
                                                        location.href = './lista'
                                                    }, 1000);


                                                } else {
                                                    toastr.error('Intenta de nuevo', '¡Error!')

                                                    setTimeout(function() {
                                                        location.href = './lista'
                                                    }, 1000);
                                                }
                                            }
                                        })



                                    } else {
                                        swal(`Debes de escribir el porqué`);

                                    }
                                });
                        }
                    })
            })
        </script>
        <script>
            $('#line_descripcion').summernote({
                placeholder: 'Descripción del paquete',
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
                tabsize: 2,
                height: 150,
            });

            $("#tipo_pnr_h").on("click", function() {
                $(".container-plan").addClass("d-none")
                $(".container-habito").removeClass("d-none")
            })

            $("#tipo_pnr_p").on("click", function() {
                $(".container-plan").removeClass("d-none")
                $(".container-habito").addClass("d-none")
            })

            $("#formRegistro").on("submit", function(e) {

                e.preventDefault();

                var datos = new FormData(this)

                datos.append('btnregistro', true)

                $.ajax({

                    url: './ajax/ajax.registro.php',
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    beforeSend: function() {},
                    success: function(res) {
                        if (res.status) {
                            toastr.success(res.mensaje, 'Muy bien!')

                            setTimeout(function() {
                                location.href = res.pagina
                            }, 1000);
                        } else {
                            toastr.error(res.mensaje, '¡Error!')


                        }
                    },
                })



            })

            $(".btnEliminarRegistro").on("click", function() {
                var rgt_id = $(this).attr("rgt_id")

                swal({
                        title: "¿Seguro de eliminar este registro?",
                        text: "Ya no podra recuperarlo",
                        icon: "info",
                        buttons: ["No, cancelar", "Si, eliminar"],
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            var datos = new FormData()

                            datos.append('rgt_id', rgt_id)
                            datos.append('btnEliminarRegistro', true)

                            $.ajax({

                                url: './ajax/ajax.registro.php',
                                method: "POST",
                                data: datos,
                                cache: false,
                                contentType: false,
                                processData: false,
                                dataType: "json",
                                beforeSend: function() {},
                                success: function(res) {
                                    if (res) {
                                        toastr.success(res.mensaje, 'Muy bien!')

                                        setTimeout(function() {
                                            location.href = './lista'
                                        }, 1000);
                                    } else {
                                        toastr.error(res.mensaje, '¡Error!')

                                    }
                                },
                            })
                        }
                    });



            })
        </script>
        <script>
            Circles.create({
                id: 'circles-1',
                radius: 45,
                value: 60,
                maxValue: 100,
                width: 7,
                text: 5,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-2',
                radius: 45,
                value: 70,
                maxValue: 100,
                width: 7,
                text: 36,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-3',
                radius: 45,
                value: 40,
                maxValue: 100,
                width: 7,
                text: 12,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

            var mytotalIncomeChart = new Chart(totalIncomeChart, {
                type: 'bar',
                data: {
                    labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                    datasets: [{
                        label: "Total Income",
                        backgroundColor: '#ff9e27',
                        borderColor: 'rgb(23, 125, 255)',
                        data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                display: false //this will remove only the label
                            },
                            gridLines: {
                                drawBorder: false,
                                display: false
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                drawBorder: false,
                                display: false
                            }
                        }]
                    },
                }
            });

            $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
                type: 'line',
                height: '70',
                width: '100%',
                lineWidth: '2',
                lineColor: '#ffa534',
                fillColor: 'rgba(255, 165, 52, .14)'
            });
        </script>
    </body>
<?php else :
    include_once 'vista/login.php';
?>

<?php endif; ?>

</html>