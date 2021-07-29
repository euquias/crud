









<?php


 $conn = new PDO("mysql:dbname=db_formulario;host=localhost", "root", ""); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>editar</title>
</head>
<body>

<?php 



 $conn = new PDO("mysql:dbname=db_formulario;host=localhost", "root", "");

  $liatar= $conn->prepare("SELECT * FROM db_lista WHERE idusuario = :ID");

  $lista = $listar->fetch(PDO::FETCH_ASSOC);
  
   if (isset($_GET['id']));
 $id = $_GET['id'];
$stmt->bindParam(":ID", $id);




?>
<div class="cadastro">
<form accept="altera.php" method="post">  
    <label class="label">Nome:</label>    
        <input type="texto" name="usuario" placeholder="nome" value="<?php echo $lista['usuario']; ?>">
            
                <label class="label">email</label>                             
                    <input type="email" name="email" placeholder="email" value="<?php echo $lista['email']; ?>">

                         <label class="label">telefone</label>
                             <input type="tel" name="telefone" placeholder="telefone" value="<?php echo $lista['telefone']; ?>">
            
                              
                            <div class="button">
                            <input type="submit" value="enviar">
                            </div>
                        </div>



</body>
</html>








 













