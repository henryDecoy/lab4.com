<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>
        Laboratorio 4 problema 5
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
            <h1>Laboratorio 4 problema 5</h1>
        <br>
            <p> Crear una clase llamada Componentes. Esta clase tendrá solo métodos estáticos:
                <br> a. Un método estático llamado myModal que me devuelva el código XML de un Modal. Este método recibirá 
                    como parámetros el El texto del botón modal, el color del botón modal (El color predeterminado es verde), 
                    título del modal, texto que va en el cuerpo del modal, el Texto del botón cerrar, el texto del botón ir, y el 
                    vínculo del botón ir: por ejemplo: 
                    Al ejecutar este código:
            </p>
            <?php 
            require_once("componentes.php");
                $obj = new componentes();
                    echo componentes::Mymodal("Ir a google","danger","Modal para ir a google","da click en el boton Google para abrir el buscador","Cerrar","Abrir google.com","https://www.google.com" );
                ?>

        <br><br><p>b. Crear un nuevo método estático que me permita dibujar algún componente web de boostrap recibiendo 
                    parámetros para formarlo dinámicamente, por ejemplo myAlert (Genera un alert de boostrap), myBadge
                    (Genera un Bade de boostrap), myBreadcrumb (genera un Breadcrumb de boostrap, etc)</p> 
                   
                    <?php 
                
                    echo componentes::myBadge("h1","primary","Badge de bootstrap","Creado con php");
                ?>     
        </div>
    
    
   









    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>