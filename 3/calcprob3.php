<?php 

class calcprob3{

    private $precio; private $vidanos;

    public function __construct($precio,$vidanos)
    {
        $this->precio=$precio;
        $this->vidanos=$vidanos;
    }


    public function setprecio($precio){
        $this->precio=$precio;
    }
    public function getprecio(){
        return $this->precio;
    }

    public function setVidaanos($vidanos){
        $this->vidanos=$vidanos;
    }
    public function getVidaanos(){
        return $this->vidanos;
    }

    public function calculos(){
        $depresiacion=0; $valrecuperado=0;
        $depresiacion=$this->precio/$this->vidanos; ?>
        <!doctype html>
            <html lang="en">
                    <?php for ($i=0;$i<=$this->vidanos;$i++){  ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $this->precio ?></td>
                            <td><?php echo $valrecuperado ?></td>
                            <?php 
                                $valrecuperado+=$depresiacion; 
                                $this->precio-=$depresiacion;

                            ?>

                        </tr>
                       <?php } ?>
            </html>
            
            <?php 
           

        }

    }


?>