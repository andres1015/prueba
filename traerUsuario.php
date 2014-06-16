<?php
  header("Content-Type: application/json", true);
  include 'conexion.php';
  $datos = new Conex();
  $consulta = "SELECT * FROM usuario";
  $usuario = $datos->consulSimple($consulta);
  while($usuarios=mysql_fetch_array($usuario)){
    $arreglo[]=$usuarios;
  }
  //$usuario["json"] = json_encode($usuario);
  //print_r($usuario['nombre']);
  echo json_encode($arreglo);
  //echo json_encode($usuario);
?>