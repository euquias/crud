<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>treinamento</title>
    <style>
*{
    padding: 0px; /*zero de barra de rolagen na paginainteira*/
    margin: 0px;  /*zero de barra de rolagen na paginainteira*/
}

body{
    display: flex;
      
}   

.cadastro {
    display: flex;
    flex-direction: column;
     padding: 30px; /*zero de barra de rolagen na paginainteira*/
     margin: 10px; 
      
     width: 200px; /*largura*/
     height:300px ; /*altura*/  
     background-color: tomato;
}   
.tabela{
    display: flex;
    font-size: 15px;
    align-items: baseline; /*centralizar ao meio*/
    border:solid blue 5px;
    align-self:center ;
    height: 300px; /*altura */
     margin-left: 30px;
    flex-basis: 800px; /*altura e largura */
    margin-right: 10px;
    overflow-x: auto;

  
}
th, td{
    padding: 10px;
    font-size: 20px;
}

.label{
    
    font-size: 30px;
}

.button{
   
 margin-left: 160px;
 padding: 10px;
 
}

</style>
</head>
<body>
    

<div class="cadastro">
<form accept="tela.php" method="post">  
    <label class="label">Nome:</label>    
        <input type="texto" name="usuario" placeholder="nome">
            
                <label class="label">email</label>                             
                    <input type="email" name="email" placeholder="email">

                         <label class="label">telefone</label>
                             <input type="tel" name="telefone" placeholder="telefone">
            
                              
                            <div class="button">
                            <input type="submit" value="enviar">
                            </div>
                        </div>
                      

<?php

$conn = new mysqli("localhost", "root", "", "db_formulario");


   if (isset($_POST['submit']));

   $usuario= $_POST['usuario'];
   $email= $_POST['email'];
   $telefone= $_POST['telefone'];


$stmt = mysqli_query($conn, "INSERT INTO db_lista( usuario, telefone, email) 
  values('$usuario', '$telefone', '$email')");






 ?>  





