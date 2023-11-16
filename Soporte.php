<?php
class Soporte {
    public $titulo;
    protected $numero;
    private $precio;
    private static $IVA = 0.21;

    function __construct($titulo, $numero, $precio){
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    function getPrecio (){
        return $this->precio;
    }

    function getPrecioConIva(){
        $precioIva = $this->precio+($this->precio*self::$IVA);
        return $precioIva;
    }

    function getNumero(){
        return $this->numero;
    }

    function muestraResumen(){
        echo ("<br><i>".$this->titulo."</i><br>");
        echo ($this->precio." € (IVA no incluido)");
    }

}
?>