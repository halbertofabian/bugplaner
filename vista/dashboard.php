<br>
<br>
<br>
<style>
    .alert-purple {
        border-left: 4px #9C4ADA solid;
    }
</style>
<div class="container">
    <form action="" method="post">
        <div class="row">

            <div class="col-8 ">
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Elije el tiempo</label>
                        <select class="form-control" name="dft_tipo" id="">
                            <?php if (isset($_POST['dft_tipo'])) : ?>
                                <option value="<?php echo $_POST['dft_tipo'] ?>"><?php echo $_POST['dft_tipo'] ?></option>
                            <?php endif; ?>
                            <option value="DIARIO">DIARIO</option>
                            <option value="SEMANAL">SEMANAL</option>
                            <option value="MENSUAL">MENSUAL</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mt-5">Consultar</button>
            </div>

            <?php

            if (isset($_POST['dft_tipo'])) {

                $plan = RegistrModelo::mdlConsultarPlaneacion($_POST['dft_tipo']);

                if ($_POST['dft_tipo'] == "SEMANAL") {
                    $class = "alert-warning";
                } elseif ($_POST['dft_tipo'] == "DIARIO") {
                    $class = "alert-success";
                } elseif ($_POST['dft_tipo'] == "MENSUAL") {
                    $class = "alert-purple";
                }
            } else {
                $plan = RegistrModelo::mdlConsultarPlaneacion('DIARIO');
                $class = "alert-success";
            }





            foreach ($plan as $key => $dft) :

            ?>
                <div class="col-12">

                    <div class="alert <?php echo $class ?>" role="alert">
                        <span><?php echo $dft['dft_texto'] ?></span>
                    </div>



                </div>

            <?php endforeach; ?>



        </div>
    </form>
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
                    </ts>
            </tr>
            <!-- ------ -->
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>INTRODUCCION ( LECTURA)</strong>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td>
                    <i></i>
                    </ts>
            </tr>

            <!-- ------ -->
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>NARRACIÓN DE MI HISTORIA </strong>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td>
                    <i></i>
                    </ts>
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
                    </ts>
            </tr>

            <!-- ------ -->
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>LA IMPORTANCIA DE LA PLANEACIÓN DE METAS </strong>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td>
                    <i></i>
                    </ts>
            </tr>
        </thead>
    </table>
</div>