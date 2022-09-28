<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>
        Laboratorio 4 problema 4
    </title>
</head>
<body>

         <!--  NavBar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://lab4.com/#">Laboratorio 4</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lista de problemas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php for($i=1; $i<=5;$i++){ ?> 
                        <li><a class="dropdown-item" href="http://lab4.com/<?php echo $i; ?>/index.php">Problema <?php echo $i ?></a></li>
                        <?php }?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="lab3.com">Laboratorio previo</a></li>
                    </ul>
                </li>
        </div>
    </div>
</nav>    

        <!-- titulo de la pagina -->
        <div class="container-sm">
        <br>
            <h1>Laboratorio 4 problema 4</h1>
        <br>
            <p> Crear una clase que tenga 2 atributos: password y salt. La clase debe tener métodos para cifrar la contraseña 
                concatenada al salt enviado como parámetro GET. El resultado debe mostrarse en una tabla de la siguiente manera:
                Para cifrar se deben utilizar las siguientes funciones:
                <br> • base64_encode
                <br> • md5
                <br> • sha1
                <br> • crc32
                <br> • crypt
                <br> • función hash y el algoritmo sha224
                <br> • función hash y el algoritmo sha512
                <br> • función hash y el algoritmo whirlpool
                <br> • función hash y el algoritmo snefru
                <br> • función hash y el algoritmo haval128,3
                <br> • función hash y el algoritmo haval128,3
            </p>
        </div>

<!--  Lectura de la informacion -->
<div class="container">
                <br>
                <form class="form-inline" action="#" method="post" >
                    <label for="content">Ingrese una constraseña y un salt a agregar a la contraseña</label>
                    <br><br>
                    <label for="content"> Contraseña</label>
                    <input type = "password" step="any"  name = "N1" placeholder = " " required >
                    <label for="content">Salt</label>
                    <input type = "text" step="any"  name = "N2" placeholder = " " required >
                    <br><br>
                    <input type = "submit" name = "Calcular" value = "Calcular" >
                </form >
            </div>

        <!-- calculo usando el codigo de php-->
        <?php
            require_once("cifrado.php");
                $password="";$salt="";
                    if(isset($_POST['Calcular'])) {
                    $password=$_POST['N1'];
                    $salt=$_POST['N2'];
                    }
                    $obj = new cifrado($password, $salt);
                    ?>
            <div class="container-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Contraseña a cifrar</th>
                            <th scope="col">Esto se va a cifrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($obj->getPassword())){ ?>
                            <?php echo "<br> Ingrese los datos <br>"; ?>
                         <?php  }else 
                                echo $obj->cifrar() ?>
                        </tbody>
                    </table>
                </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>