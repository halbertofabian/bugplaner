<?php
class RegistroControlador
{
    public static function ctrRegistro()
    {
        if (isset($_POST['btnregistro'])) {

            $_POST['rgt_fecha_registro'] = FECHA;
            $_POST['rgt_usuario'] = $_SESSION['session_usr']['usr_id'];

            if ($_POST['rgt_tipo'] == 'h') {
                $_POST['rgt_recordatorio'] = $_POST['rgt_recordatorio_h'];
            }
            if ($_POST['rgt_tipo'] == 'p') {
                $_POST['rgt_recordatorio'] = $_POST['rgt_recordatorio_p'];
            }


            $registro = RegistrModelo::mdlRegistro($_POST);


            if ($registro) {
                return array(
                    'status' => true,
                    'mensaje' => 'Registro guardado',
                    'pagina' => HTTP_HOST . 'lista'
                );
            } else {

                return array(
                    'status' => false,
                    'mensaje' => 'Ocurrio un error, vuelva a intentarlo'
                );
            }
        }
    }
    public function ctrAgregarTimeLine()
    {
        if (isset($_POST['btnAgregarTimeline'])) {
            $_POST['line_fecha_registro'] = FECHA;
            $registro = RegistrModelo::mdlAgregarTimeLine($_POST);
            if ($registro) {
                AppControlador::msj('success', '¡Muy bien!', 'Avance guardado con éxito', HTTP_HOST . 'time-line/' . $_POST['line_registro']);
            } else {
            }
        }
    }
}
