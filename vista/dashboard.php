<br>
<br>
<br>
<style>
    .alert-purple {
        border-left: 4px #9C4ADA solid;
    }
</style>
<div class="container">
    <form method="post">
        <div class="row">

            <div class="col-8 ">
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Elije el tiempo</label>
                        <select class="form-control" name="dft_tipo" id="dft_tipo">
                            <option value="DIARIO">DIARIO</option>
                            <option value="SEMANAL">SEMANAL</option>
                            <option value="MENSUAL">MENSUAL</option>
                            <option value="ANUAL">ANUAL</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="row" id="contenedor">

    </div>

    <hr>
    <h5>Mis objetivos</h5>
    <div class="row" id="contenedor-usr">

    </div>

    <hr>





    <table class="table">
        <thead>
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>LA IMPORTANCIA DE LA PLANEACION DE METAS</strong>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td>
                    <i></i>
                </td>
            </tr>


            <!-- ------ -->
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>NARRACIÓN DE MI HISTORIA </strong>
                    <button class="btn btn-default btn-sm float-right" id="editarMiHistoria"><i class="fas fa-edit    "></i></button>
                    <button class="btn btn-primary btn-sm float-right d-none" id="guardarMiHistoria"><i class="fas fa-save    "></i></button>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td>
                    <?php
                    $miHistoria = RegistrModelo::mdlConsultarMiHistoria($_SESSION['session_usr']['usr_id']);

                    ?>
                    <i id="miHistoria"><?php echo $miHistoria['hst_text'] ?></i>
                    <textarea name="" class="form-control d-none" id="contenedorHistoria" cols="30" rows="30"><?php echo $miHistoria['hst_text'] ?></textarea>
                </td>
            </tr>

            <!-- ------ -->
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>MISIÓN O FILOSOFIA </strong>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td>
                    <i>Aportar y promover a mi familia y a la sociedad, el respeto y crecimiento para el bienestar de la humanidad.</i>
                </td>
            </tr>


        </thead>
    </table>
</div>