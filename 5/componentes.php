<!doctype html>
 <html lang="en">
 <body>

<?php 
    class componentes{
        public $titulo; public $color; public $titulomodal; public $textmodal; public $cerrar; public $abrir; public $link;
        public $tipo; public $colorbtn; public $texto;public $txtbtn;

        
        public static function Mymodal($titulo, $color, $titulomodal,$textmodal, $cerrar,$abrir,$link){  ?>
            
                <br><br>
                <div class="container-sm">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-<?php echo $color ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php echo $titulo ?>
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulomodal ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo $textmodal ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $cerrar ?></button>
                                 <a href="<?php echo $link ?>"><button type="button" class="btn btn-primary"><?php echo $abrir ?></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
            
          
            
           

            <?php
        }
        public static function myBadge($tipo, $colorbtn, $texto,$txtbtn){?>
            <<?php echo $tipo ?>><?php echo $texto ?><span class="badge bg-<?php echo $colorbtn ?>"><?php echo $txtbtn ?></span></<?php echo $tipo ?>>
        <?php }




    }
    ?>
    </body>
    </html>