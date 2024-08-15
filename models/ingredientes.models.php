<?php
require_once('../config/conexion.php');
class Ingredientes
{
    public function todos()
    {  //select * from alumnos
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "select * from ingredientes";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function uno($ingrediente_id)
    {  //select * from alumnos where id=1
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "select * from ingredientes where ingrediente_id=$ingrediente_id";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    

    
    public function insertar($nombre, $cantidad, $unidad,$calorias)
    {  //insert into alumnos values ()
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "INSERT INTO `ingredientes`(`nombre`,`cantidad`, `unidad`,`calorias`) VALUES('$nombre',$cantidad,'$unidad',$calorias)";

        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function actualizar($ingrediente_id, $nombre, $cantidad, $unidad,$calorias)
    {  //update alumnos set where id=1
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "UPDATE `ingredientes` SET `nombre`='$nombre',`cantidad`=$cantidad,`unidad`='$unidad',`calorias`=$calorias where ingrediente_id=$ingrediente_id";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function eliminar($ingrediente_id)
    {  //delete from alumnos where id=1
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "delete from ingredientes where ingrediente_id=$ingrediente_id";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    
}
