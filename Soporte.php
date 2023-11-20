<?php
class Soporte {
    public $titulo;
    public $numero;
    private $precio;
    private static $IVA = 0.21;

    // Constructor Soporte
    function __construct($titulo, $numero, $precio){
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    // Con esta funcion obtenemos el valor del precio
    function getPrecio (){
        return $this->precio;
    }

    // Con esta funcion obtenemos el valor del precio con el IVA
    function getPrecioConIva(){
        $precioIva = $this->precio+($this->precio*self::$IVA);
        return $precioIva;
    }

    // Obtenemos el número de la pelicula
    function getNumero(){
        return $this->numero;
    }

    // Muestra el resumen completo de Soporte
    function muestraResumen(){
        echo ("<br><i>".$this->titulo."</i><br>");
        echo ($this->precio." € (IVA no incluido)");
    }

}
?>