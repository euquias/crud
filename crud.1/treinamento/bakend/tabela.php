<?php
require_once "tabela.php";
?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>deleta</title>


         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     </head>
     <body>
     <?php
         $conn = new PDO("mysql:dbname=db_formulario;host=localhost", "root", "");
             $listagen = $conn->prepare("SELECT * FROM db_lista");
             $listagen->execute();
             while ($lista = $listagen->fetch(PDO::FETCH_ASSOC)){       
           ?>
           

            <div class="container-fluid">
            <div class="from-row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">acao</th>
                            <th scope="col">acao</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>                        
                       <td><?php echo $lista['idusuario'];?></th>
                       <td><?php echo $lista['usuario'];?></td>
                       <td><?php echo $lista['telefone'];?></td>
                        <td> <?php echo $lista['email'];?></td>
                        <td><a href="update.php?id=<?php echo $lista['idusuario'];?>">
                        <button type="button" class="btn btn-info" name= "id">Editar</button></button></a></td>
                                            
                          <td><a href="deleta.php?id=<?php echo $lista['idusuario'];?>">
                          <button  type="button" class="btn btn-danger">deletar</button></a></td>
                            <?php    }  ?>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div> 
     </body>
     </html>

                    




