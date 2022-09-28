<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>
        Laboratorio 4 problema 3
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
            <h1>Laboratorio 4 problema 3</h1>
        <br>
            <p> Elabore una aplicación web con PHP utilizando clases que permita generar una tabla de depreciación lineal de un 
                activo determinado, conociendo su precio original y la cantidad de años de vida útil utilizando los siguientes enunciados:
                <br> a. La depreciación anual se calcula dividiendo el precio original entre la vida útil.
                <br> b. En el año cero no hay valor recuperado
                <br> c. En cada iteración se debe restar al precio original la depreciación anual.
            </p>
        </div>

    <!--  Lectura de la informacion -->
    <div class="container">
                <br>
                <form class="form-inline" action="#" method="post" >
                    <label for="content">Ingrese el precio original y los años de vida:</label>
                    <br><br>
                    <label for="content"> Precio original</label>
                    <input type = "number" step="any"  name = "N1" placeholder = " " required >
                    <label for="content">Años de vida</label>
                    <input type = "number" step="any"  name = "N2" placeholder = " " required >
                    <br><br>
                    <input type = "submit" name = "Calcular" value = "Calcular" >
                </form >
            </div>

        <!-- calculo usando el codigo de php-->
        <?php
            require_once("calcprob3.php");
                $vidanos="";$precio="";
                    if(isset($_POST['Calcular'])) {
                    $precio=(int)$_POST['N1'];
                    $vidanos=(int)$_POST['N2'];
                    }
                    $obj = new calcprob3($precio, $vidanos);
                    ?>
            <div class="container-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Años de vida</th>
                            <th scope="col">Valor por años</th>
                            <th scope="col">Valor recuperado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($obj->getprecio())){ ?>
                            <?php echo "<br> Ingrese los datos <br>"; ?>
                         <?php  }else 
                                echo $obj->calculos() ?>
                        </tbody>
                    </table>
                </div>
                   

        

        




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>