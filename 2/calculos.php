<?php

class calculos{
    private $alumnos;
    private $alumnas;
    


    public function __construct($alumnos, $alumnas)
    {
        $this-> alumnos = $alumnos;
        $this-> alumnas = $alumnas;
    }



    //REGRESO DE LA CANTIDAD DE ALUMNOS/AS PARA IMPRIMIR EN EL RESULTADO
    public function setAlumnos($alumnos){
        $this-> alumnos = $alumnos;
    }
    public function getAlumnos(){
        return $this->alumnos;
    }
    public function setAlumnas($alumnas){
        $this-> alumnas = $alumnas;
    }
    public function getAlumnas(){
        return $this->alumnas;
    }


    //OPERACIONES REALIZADAS
    public function suma(){
        return $suma= $this->alumnos+$this->alumnas;
    }
    public function alumnosoperacion(){
        $suma= $this->alumnos+$this->alumnas;
        return $porcentaje1=($this->alumnos/$suma)*100;
    }

    public function alumnasoperacion(){
        $suma= $this->alumnos+$this->alumnas;
        return $porcentaje2=($this->alumnas/$suma)*100;
    }



    

}

?>