<?php
require_once 'conexion.php';
class RegistrModelo
{

    public static function mdlRegistro($rgt)
    {
        try {
            //code...
            $sql = "INSERT INTO tbl_registros_rgt (rgt_descripcion,rgt_tipo,rgt_plazos,rgt_fecha_limite,rgt_recordatorio,rgt_usuario,rgt_fecha_registro	
            ) VALUES(?,?,?,?,?,?,?)";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $rgt['rgt_descripcion']);
            $pps->bindValue(2, $rgt['rgt_tipo']);
            $pps->bindValue(3, $rgt['rgt_plazos']);
            $pps->bindValue(4, $rgt['rgt_fecha_limite']);
            $pps->bindValue(5, $rgt['rgt_recordatorio']);
            $pps->bindValue(6, $rgt['rgt_usuario']);
            $pps->bindValue(7, $rgt['rgt_fecha_registro']);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
        }
    }
    public static function mdlAgregarTimeLine($line)
    {
        try {
            //code...
            $sql = "INSERT INTO tbl_time_line (line_registro,line_fecha_registro,line_titulo,line_descripcion) VALUES(?,?,?,?)";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $line['line_registro']);
            $pps->bindValue(2, $line['line_fecha_registro']);
            $pps->bindValue(3, $line['line_titulo']);
            $pps->bindValue(4, $line['line_descripcion']);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlConsultaRegistro($rgt_usuario)
    {
        try {
            //code...
            $sql = "SELECT * FROM tbl_registros_rgt WHERE rgt_usuario = ? ORDER BY rgt_id DESC";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $rgt_usuario);
            $pps->execute();
            return $pps->fetchAll();
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }

    public static function mdlConsultaRegistroById($rgt_usuario, $rgt_id)
    {
        try {
            //code...
            $sql = "SELECT * FROM tbl_registros_rgt WHERE rgt_usuario = ? AND rgt_id = ?";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $rgt_usuario);
            $pps->bindValue(2, $rgt_id);
            $pps->execute();
            return $pps->fetch();
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }

    public static function mdlConsultaTimeLineRegistroById($rgt_id)
    {
        try {
            //code...
            $sql = "SELECT * FROM tbl_time_line WHERE line_registro = ? ORDER BY line_fecha_registro desc";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $rgt_id);
            $pps->execute();
            return $pps->fetchAll();
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }

    public static function mdlEliminarRegistro($rgt_id)
    {
        try {
            //code...
            $sql = "DELETE  FROM tbl_registros_rgt WHERE rgt_id = ? ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $rgt_id);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlMetaCumplida($rgt_id)
    {
        try {
            //code...
            $sql = "UPDATE   tbl_registros_rgt SET rgt_meta_estado	= 1 , rgt_fecha_actu = ? WHERE rgt_id = ? ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, FECHA);
            $pps->bindValue(2, $rgt_id);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }
    public static function mdlMetaNoCumplida($rgt)
    {
        try {
            //code...
            $sql = "UPDATE   tbl_registros_rgt SET rgt_meta_estado	= 0 , rgt_fecha_actu = ?, rgt_nota = ? WHERE rgt_id = ? ";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, FECHA);
            $pps->bindValue(2, $rgt['rgt_nota']);
            $pps->bindValue(3, $rgt['rgt_id']);
            $pps->execute();
            return $pps->rowCount() > 0;
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }

    public static function mdlConsultarPlaneacion($dft_tipo)
    {
        try {
            //code...
            $sql = "SELECT * FROM tbl_default_dft WHERE dft_tipo = ? ORDER BY dft_id ASC";
            $con = Conexion::conectar();
            $pps = $con->prepare($sql);
            $pps->bindValue(1, $dft_tipo);
            $pps->execute();
            return $pps->fetchAll();
        } catch (PDOException $th) {
            //throw $th;
            return false;
        } finally {
            $pps = null;
            $con = null;
        }
    }
}
