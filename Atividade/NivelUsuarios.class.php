<?php

class NivelUsuario{
    
    private $idNivelusuario;
    private $nivel;


    


    public function getIdNivelusuario(){
        return $this->idNivelusuario;
    }

    public function setIdNivelusuario($idNivelusuario){
        $this->idNivelusuario = $idNivelusuario;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function setNivel($nivel){
        $this->nivel = $nivel;
    }

}
?>

