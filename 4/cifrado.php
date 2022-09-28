<?php 
    class cifrado{
        private $password;
        Private $salt;

        
        public function __construct($password, $salt)
        {
            $this->password=$password;
            $this->salt=$salt;
        }


        public function setPassword($password){
            $this->password=$password;
        }
        public function getPassword(){
            return $this->password;
        }

        public function setSalt($salt){
            $this->salt=$salt;
        }
        public function getSalt(){
            return $this->salt;
        }



        public function cifrar(){
            $concatenda=$this->password.$this->salt;
            $claves = array('base64_encode','md5','sha1','crc32');
            $claves2=array('SHA224','SHA512','WHIRLPOOL','HAVAL128,3','HAVAL128,5')
            ?>
            <!doctype html>
            <html lang="en">
                        <tr>
                            <th scope="row"><?php echo "Esta es la contraseña" ?></th>
                            <td> <?php echo $this->password ; ?></td>
                        </tr> 
                        <tr>
                            <th scope="row"><?php echo "Este es el salt" ?></th>
                            <td> <?php echo $this->salt ; ?></td>
                        </tr> 

   
                <?php   foreach($claves as $cifrador1){ ?>
                        <tr>
                            <th scope="row"><?php echo $cifrador1 ?></th>
                            <td> <?php echo $cifrador1($concatenda)  ?></td>
                        </tr>    
                <?php }?>

                        <tr>
                            <th scope="row"><?php echo "crypt" ?></th>
                            <td> <?php echo crypt($this->password,$this->salt)  ?></td>
                        </tr>  

                        
                <?php   foreach($claves2 as $cifrador2){ ?>
                        <tr>
                            <th scope="row"><?php echo $cifrador2 ?></th>
                            <td> <?php echo hash($cifrador2,$concatenda,false)  ?></td>
                        </tr>  
                <?php }?>
                       
            </html>
         <?php
          
        }


    }


?>