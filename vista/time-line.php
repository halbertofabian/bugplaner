<!-- TimeLine -->
<?php
$registro = RegistrModelo::mdlConsultaRegistroById($_SESSION['session_usr']['usr_id'], $rutas[1]);


?>
<div class="container">
    <h4 class="page-title text-center"><?php echo $registro['rgt_descripcion'] ?></h4>
    <div class="row">
        <?php
        $timeLine = RegistrModelo::mdlConsultaTimeLineRegistroById($registro['rgt_id']);

        foreach ($timeLine as $key => $line) :
        ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo $line['line_titulo']; ?>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <?php echo $line['line_descripcion']; ?>
                            </div>
                        </div>
                        <p class="card-text"> Publicado: <?php echo fechaCastellano($line['line_fecha_registro']); ?> </p>
                    </div>
                    <div class="card-footer text-muted">
                        Botones
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<a class='flotante btn btn-dark' data-toggle="modal" data-target="#mdlTimeLine" href='#' style="z-index: 300;">+</a>


<div class="modal fade" id="mdlTimeLine" tabindex="-1" aria-labelledby="mdlTimeLineLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlTimeLineLabel">Resultados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body mb-5">
                    <div class="form-group">
                        <input type="hidden" value="<?php echo $registro['rgt_id'] ?>" name="line_registro">
                        <label for="">Encabezado</label>
                        <input type="text" name="line_titulo" id="line_titulo" required class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea id="line_descripcion" class="form-control" name="line_descripcion"></textarea>

                    </div>
                    <input type="submit" class="btn btn-primary float-right mt-2" name="btnAgregarTimeline" value="Guardar">
                </div>
                <?php
                $registrarTimeLine = new RegistroControlador();
                $registrarTimeLine->ctrAgregarTimeLine();
                ?>
            </form>
        </div>
    </div>
</div>