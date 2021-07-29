<p>
<div class="logo">
    <img src="../img/logo.jpg" alt="logo" width="150" height="100" title="logo">
</div>
</p>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.html</title>
    <style>

*{
    padding: 0px; /*zero de barra de rolagen na paginainteira*/
    margin: 0px;  /*zero de barra de rolagen na paginainteira*/
}
        .centro {
            position: absolute;
            top: 100px;
            right: 200px;
        }

        footer {
            position: absolute;
            top: 500px;
            left: 80px;
        }

        .logo {
            position: absolute;
            top: 90px;
            left: 50px;
        }

    /*css do formulario*/
  
    .contaener{
        background-color: #333;
        position: absolute;
   background-origin: red;

        margin: 200px;

    }
  
   
    </style>


    </style>
</head>
 
<body>

   

    <div class="centro">
        <nav>
            <a href="index.php"><button>home</button></a>
            <a href="cadastra.php"><button>cadastro</button></a>
            <a href="tabela.php"><button>tabela</button></a>
        </nav>
    </div>
    <section id="conteudo"></section>
    <footer>Euquias@fullstck</footer>
    <script>

        document.querySelectorAll('a').forEach(link => {
            const conteudo = document.getElementById('conteudo')
            link.onclick = function (E) {
                E.preventDefault()
                fetch(link.href)
                    .then(resp => resp.text())
                    .then(html => conteudo.innerHTML = html)

            }
        })
    </script>

</body>

</html>