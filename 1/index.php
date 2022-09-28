<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 4 problema 1</title>
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


<br>
    <div class="container-sm">
        <h1>Laboratorio 4 Problema 1</h1>
        <p> Utilizando programación orientada a objeto, desarrolle este problema: Elaborar un programa en PHP + HTML que 
        permita calcular el salario neto de un trabajador en función del número de horas trabajadas, pago por hora de trabajo 
        y un descuento fijo al sueldo bruto del 20% (este valor es una constante). 
        <br> Los cálculos a efectuar para obtener el salario neto de un trabajador se muestran a continuación: 
        <br> SalarioBruto = HorasTrabajadas * PagoPorHora Descuento = 0.2 * SalarioBruto SalarioNeto = SalarioBruto – Descuento</p>
        
           <!--  Lectura de la informacion -->
            <div class="container">
                <br>
                <form action = "" method = "post" >
                    <label for="content">Ingrese las horas trabajadas</label>
                    <input type = "number" step="any"  name = "N1" placeholder = " " required >
                    <br><br>
                    <label for="content">Ingrese Pago por hora</label>
                    <input type = "number" step="any"  name = "N2" placeholder = " " required >
                    <br><br>
                    <input type = "submit" name = "Calcular" value = "Calcular" >

                </form >
            </div>
    </div>  

    
    <!-- calculo usando el codigo de php-->
    <?php
        $Htrabajadas=0;$PaxHo=0;
        if(isset($_POST['Calcular'])) {
        $Htrabajadas=(int)$_POST['N1'];
        $PaxHo=(int)$_POST['N2'];
        }
        require_once("calculo.php");
        $obj=new calculo($Htrabajadas, $PaxHo);
    ?>

    
        <!-- muestra de la informacion -->
            <div class="container-sm">
                <?php if(empty($obj->getHtrabajadas())){
                    echo "<br> Ingrese los datos <br>";
            }else {?>

            <br>
            <p>Su salario neto es:</p>
                <form action = "#" method = "get" >
                    <input type = "text" name="Resultado"
                    value = "<?php echo $obj->calcular() ?>";>
                </form >
            </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>