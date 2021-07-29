

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>


<ul>
         <?php
         $conn = new PDO("mysql:dbname=db_formulario;host=localhost", "root", "");
             $listagen = $conn->prepare("SELECT * FROM db_lista");
             $listagen->execute();
             while ($lista = $listagen->fetch(PDO::FETCH_ASSOC)){
                   
           ?>
               <li><?php echo $lista['idusuario']; ?></li>
               <li><?php echo $lista['usuario']; ?></li>
               <li><?php echo $lista['telefone']; ?></li>
               <li><?php echo $lista['email']; ?></li>
               <a href="altera.php?id=<?php echo $lista['idusuario'];?>">editar</a>
                <a href="deleta.php?id=<?php echo $lista['idusuario'];?>">excluir</a>
                
        <?php    }  ?>

     </ul>






</head>
<body>
     
</body>
</html>
                                    
                                

                    




