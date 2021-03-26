<?php
require_once '../modelo/registro.modelo.php';
require_once '../controlador/registro.controlador.php';
require_once '../config.php';

class RegistroAjax
{
    public $rgt_id;
    public function ajaxRegistro()
    {
        $res = RegistroControlador::ctrRegistro();

        echo json_encode($res, true);
    }
    public function ajaxEliminarRegistro()
    {
        $res = RegistrModelo::mdlEliminarRegistro($this->rgt_id);

        echo json_encode($res, true);
    }

    public function ajaxMetaCumplida()
    {
        $res = RegistrModelo::mdlMetaCumplida($this->rgt_id);

        echo json_encode($res, true);
    }
    public function ajaxMetaNoCumplida()
    {
        $res = RegistrModelo::mdlMetaNoCumplida($_POST);

        echo json_encode($res, true);
    }
}
if (isset($_POST['btnregistro'])) {

    $registro = new RegistroAjax();
    $registro->ajaxRegistro();
}

if (isset($_POST['btnEliminarRegistro'])) {

    $registro = new RegistroAjax();
    $registro->rgt_id = $_POST['rgt_id'];
    $registro->ajaxEliminarRegistro();
}

if (isset($_POST['btnMetaCumplida'])) {

    $registro = new RegistroAjax();
    $registro->rgt_id = $_POST['rgt_id'];
    $registro->ajaxMetaCumplida();
}

if (isset($_POST['btnMetaNoCumplida'])) {

    $registro = new RegistroAjax();
    $registro->ajaxMetaNoCumplida();
}

//CARGAR ACTIVIDADES CON AJAX
if (isset($_POST['btnselect'])) {
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

        echo '  <div class="col-12">

                <div class="alert ' .  $class . ' " role="alert">
                    <span>' . $dft['dft_texto'] . '</span>
                </div>



            </div>';

    endforeach;
}
