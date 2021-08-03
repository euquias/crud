<?php
$conn = new PDO("mysql:dbname=db_formulario;host=localhost", "root", "");
if (isset($_GET['id']));
 $id = $_GET['id'];
 

$stmt = $conn->prepare("SELECT * FROM db_lista WHERE idusuario = '$id'");
$stmt->execute();
$up = $stmt->fetch(PDO::FETCH_ASSOC);



if (isset($_POST['editar']));
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];



$is = $conn->prepare("UPDATE db_lista SET usuario = '$nome', telefone = '$telefone', email = '$email' WHERE idusuario = '$id' ");
$is->execute();


?>
<html>
<div class="cadastro">
<form method="post">  
    <label class="label">Nome:</label>    
        <input type="text" name="nome" placeholder="nome" value="<?php echo  $up['usuario']; ?>">
            
                <label class="label">email</label>                             
                    <input type="text" name="email" placeholder="email" value="<?php echo  $up['email']; ?>">

                         <label class="label">telefone</label>
                             <input type="text" name="telefone" placeholder="telefone" value="<?php echo  $up['telefone']; ?>">
            
                              
                            <div class="button">
                            <input type="submit" name= "editar" value="editar">
                            </div>
                        </div>

                        
</form>                     
</html>
