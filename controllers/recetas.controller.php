<?php
error_reporting(0);
require_once("../models/recetas.models.php");
$recetas = new Recetas();

switch ($_GET["op"]) {
    case "todos":
        $datos = $recetas->todos();
        while ($row = mysqli_fetch_assoc($datos)) { ///muchos registros 
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case "uno":
        $receta_id = $_POST["receta_id"];
        $datos = $recetas->uno($receta_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case "insertar":
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $tiempo_preparacion = $_POST["tiempo_preparacion"];
        $dificultad = $_POST["dificultad"];
        $datos = $recetas->insertar($nombre, $descripcion, $tiempo_preparacion,$dificultad);
        echo json_encode($datos);
        break;
    case "actualizar":
        $receta_id = $_POST["receta_id"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $tiempo_preparacion = $_POST["tiempo_preparacion"];
        $dificultad = $_POST["dificultad"];
        $datos = $recetas->actualizar($receta_id, $nombre, $descripcion, $tiempo_preparacion,$dificultad);
        echo json_encode($datos);
        break;
        
    case "eliminar":
        $receta_id = $_POST["receta_id"];
        $datos = $recetas->eliminar($receta_id);
        echo json_encode($datos);
        break;
        // Dentro del controlador recetas.controller.php

}
