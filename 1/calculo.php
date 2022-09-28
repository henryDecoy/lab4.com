
 <!-- calculo usando el codigo de php-->
 <?php
    class calculo{
        private $Htrabajadas;
        private $PaxHo;
        private $SalNeto="";
        private $salbruto="";

        public function __construct($Htrabajadas, $PaxHo)
        {
            $this -> Htrabajadas=$Htrabajadas;
            $this -> PaxHo=$PaxHo;
        }
        
        public function setHTrabajadas($Htrabajadas){
            $this -> Htrabajadas=$Htrabajadas;
        }
        public function getHtrabajadas(){
            return $this -> Htrabajadas;
        }

        public function setPaxHo($PaxHo){
            $this -> PaxHo=$PaxHo;
        }
        public function getPaxHo(){
            return $this->PaxHo;
        }

        public function calcular(){
            $salbruto= $this->Htrabajadas* $this->PaxHo;
            $desc=.20*$salbruto;
            $SalNeto=$salbruto-$desc;
            return $SalNeto;
        }


    }
   
    ?>