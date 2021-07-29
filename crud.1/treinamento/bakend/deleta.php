<?php

 $conn = new PDO("mysql:dbname=db_formulario;host=localhost", "root", "");    
 $stmt = $conn->prepare("DELETE FROM db_lista WHERE idusuario = :ID");
$stmt->bindParam(":ID", $id);
 $id = $_GET['id'];
 $stmt->execute();
 header('location: tabela.php')    
?>