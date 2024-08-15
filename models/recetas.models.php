<?php
require_once('../config/conexion.php');
class Recetas
{
    public function todos()
    {  //select * from alumnos
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "select * from recetas";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function uno($receta_id)
    {  //select * from alumnos where id=1
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "select * from recetas where receta_id=$receta_id";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    

    
    public function insertar($nombre, $descripcion, $tiempo_preparacion,$dificultad)
    {  //insert into alumnos values ()
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "INSERT INTO `recetas`(`nombre`,`descripcion`, `tiempo_preparacion`,`dificultad`) VALUES('$nombre','$descripcion',$tiempo_preparacion,'$dificultad')";

        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function actualizar($receta_id, $nombre, $descripcion, $tiempo_preparacion,$dificultad)
    {  //update alumnos set where id=1
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "UPDATE `recetas` SET `nombre`='$nombre',`descripcion`='$descripcion',`tiempo_preparacion`=$tiempo_preparacion,`dificultad`='$dificultad' where receta_id=$receta_id";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function eliminar($receta_id)
    {  //delete from alumnos where id=1
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "delete from recetas where receta_id=$receta_id";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    
}
