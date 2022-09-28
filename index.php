
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laboratorio 4</title>
</head>
<body>
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
                        <li><a class="dropdown-item" href="http://lab3.com/">Laboratorio previo</a></li>
                    </ul>
                </li>
        </div>
    </div>
</nav>    


<div class="container-sm">
<br>
<h1>Laboratorio 4 Pagina principal</h1><br><br>

<?php 
    $array = array(
    1  => "Utilizando programación orientada a objeto, desarrolle este problema: Elaborar un programa en PHP + HTML que 
    permita calcular el salario neto de un trabajador en función del número de horas trabajadas, pago por hora de trabajo 
    y un descuento fijo al sueldo bruto del 20% (este valor es una constante). Los cálculos a efectuar para obtener el 
    salario neto de un trabajador se muestran a continuación: SalarioBruto = HorasTrabajadas * PagoPorHora Descuento 
    = 0.2 * SalarioBruto SalarioNeto = SalarioBruto – Descuento",
    2  => "Utilizando programación orientada a objeto, desarrolle este problema: Se pide crear un algoritmo que calcule el 
    porcentaje de alumnos y alumnas de un salón de clase. Por ejemplo, si hay 25 alumnos y 20 alumnas la salida debe 
    ser: Porcentaje de alumnos: (25/45)*100 = 55.55555% Porcentaje de alumnas: (20/45)*100 = 44.44444% Generar una 
    tabla html con los resultados",
    3  => "Elabore una aplicación web con PHP utilizando clases que permita generar una tabla de depreciación lineal de un 
    activo determinado, conociendo su precio original y la cantidad de años de vida útil utilizando los siguientes 
    enunciados:
    <br> a. La depreciación anual se calcula dividiendo el precio original entre la vida útil.
    <br> b. En el año cero no hay valor recuperado
    <br> c. En cada iteración se debe restar al precio original la depreciación anual.",
    4  => "Crear una clase que tenga 2 atributos: password y salt. La clase debe tener métodos para cifrar la contraseña 
    concatenada al salt enviado como parámetro GET. 
    <br>El resultado debe mostrarse en una tabla de la siguiente manera:
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
        ",
    5  => "Crear una clase llamada Componentes. Esta clase tendrá solo métodos estáticos:
    <br> a. Un método estático llamado myModal que me devuelva el código XML de un Modal. Este método recibirá 
    como parámetros el El texto del botón modal, el color del botón modal (El color predeterminado es verde), 
    título del modal, texto que va en el cuerpo del modal, el Texto del botón cerrar, el texto del botón ir, y el 
    vínculo del botón ir:
    <br> b. Crear un nuevo método estático que me permita dibujar algún componente web de boostrap recibiendo 
    parámetros para formarlo dinámicamente, por ejemplo myAlert (Genera un alert de boostrap), myBadge
    (Genera un Bade de boostrap), myBreadcrumb (genera un Breadcrumb de boostrap, etc)",
    
    );

?>





<table class="table">
        <thead>
            <tr>
                <th scope="col">Numero del problema</th>
                <th scope="col">Enunciado</th>
                <th scope="col">Redireccionamiento</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=1;$i<=5;$i++){?>
            <tr>
                <th scope="row"><?php echo $i?></th>
                <td><?php echo $array[$i] ?> </td>
                <td><a href="/<?php echo $i ?>"><button type="button" class="btn btn-dark">  Button </button></a></td>
                <td> </td>
            </tr>
            <?php }?> 
        </tbody>
    </table>
</div>


 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>