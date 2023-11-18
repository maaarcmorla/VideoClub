<?php
class CintaVideo extends Soporte{
    private $duracion;

    // Constructor CintaVideo
    function __construct($titulo, $numero, $precio, $duracion){  
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;   
    }

    // Muestra el resumen que hereda de la clase Soporte
    function muestraResumen(){
        echo ("<br>Pelicula en VHS:");
        parent::muestraResumen();
        echo ("Duracion: ".$this->duracion." minutos<br>");
    }
}
?>