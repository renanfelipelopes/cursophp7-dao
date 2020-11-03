<?php  

require_once("config.php");

// $sql = new sql();

// $usuarios = $sql->select("SELECT * FROM tabela_de_clientes");

// echo json_encode($usuarios);

$root = new Usuario();

$root->loadbyId(3);

echo $root;

?>