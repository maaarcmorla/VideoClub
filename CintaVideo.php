<?php
class CintaVideo extends Soporte{
    private $duracion;

    function __construct($titulo, $numero, $precio, $duracion){  
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;   
    }

    function muestraResumen(){
        echo ("<br>Pelicula en VHS:");
        parent::muestraResumen();
        echo ("Duracion: ".$this->duracion." minutos<br>");
    }
}
?>