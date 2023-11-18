<?php
class Dvd extends Soporte{
    public $idiomas;
    private $formatPantalla;

    function __construct($titulo, $numero, $precio, $idiomas, $formatPantalla){  
        parent::__construct($titulo, $numero, $precio);
        $this->idiomas = $idiomas;
        $this->formatPantalla = $formatPantalla;     
    }

    function muestraResumen(){
        echo ("<br>Pelicula en DVD:");
        parent::muestraResumen();
        echo ("Idiomas: ".$this->idiomas."<br>");
        echo ("Formato Pantalla: ".$this->formatPantalla."<br>");
    }
}
?>