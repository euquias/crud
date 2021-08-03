<?php
$conn = new mysqli("localhost", "root", "", "db_formulario");
    if (isset($_POST['submit']));
   $usuario= $_POST['usuario'];
   $email= $_POST['email'];
   $telefone= $_POST['telefone'];
$stmt = mysqli_query($conn, "INSERT INTO db_lista( usuario, telefone, email) 
  values('$usuario', '$telefone', '$email')");
 ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
</head>

<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                Formulario
            </h5>
        </div>
    </div>
    <form accept="tela.php" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form class="needs-validation" novalidate>
                    <div class="card-bory">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nome</label>
                            <input type="text" class="form-control" name="usuario" placeholder="Nome">
                            <div class="valid-feedback">Tudo certo!
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            <div class="card-bory">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom03">Email</label>
                        <input type="text" class="form-control" name="email"  
                          placeholder="nome@exemplo.com" required>
                            <div class="invalid-feedback">Por favor, informe uma Email válida.
                        </div>
                    </div>
                 </div>
                <div class="card-bory">
                     <div class="col-md-4 mb-3">
                         <label for="validationCustom04">telefone</label>
                             <input type="text" class="form-control" name="telefone" placeholder="telefone" required>
                                <div class="invalid-feedback">Por favor, informe um estado válido.
                       </div>
                    </div>
               </div>
               <div class="col-md-4 mb-3">
              <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
     </form>
     
     <script>
            // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                    var forms = document.getElementsByClassName('needs-validation');
                    // Faz um loop neles e evita o envio
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>


<?php
require_once "tabela.php";
?>


</body>
</html>


    
    
   
   


 