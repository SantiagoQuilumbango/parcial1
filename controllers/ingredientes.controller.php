<?php
error_reporting(0);
require_once("../models/ingredientes.models.php");
$ingredientes = new Ingredientes();

switch ($_GET["op"]) {
    case "todos":
        $datos = $ingredientes->todos();
        while ($row = mysqli_fetch_assoc($datos)) { ///muchos registros 
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case "uno":
        $ingrediente_id = $_POST["ingrediente_id"];
        $datos = $ingredientes->uno($ingrediente_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case "insertar":
        $nombre = $_POST["nombre"];
        $cantidad = $_POST["cantidad"];
        $unidad = $_POST["unidad"];
        $calorias = $_POST["calorias"];
        $datos = $ingredientes->insertar($nombre, $cantidad, $unidad,$calorias);
        echo json_encode($datos);
        break;
    case "actualizar":
        $ingrediente_id = $_POST["ingrediente_id"];
        $nombre = $_POST["nombre"];
        $cantidad = $_POST["cantidad"];
        $unidad = $_POST["unidad"];
        $calorias = $_POST["calorias"];
        $datos = $ingredientes->actualizar($ingrediente_id, $nombre, $cantidad, $unidad,$calorias);
        echo json_encode($datos);
        break;
        
    case "eliminar":
        $ingrediente_id = $_POST["ingrediente_id"];
        $datos = $ingredientes->eliminar($ingrediente_id);
        echo json_encode($datos);
        break;
        // Dentro del controlador recetas.controller.php

}
