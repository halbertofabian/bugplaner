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
