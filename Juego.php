<?php
class Juego extends Soporte{
    public $consola;
    private $minNumJugadores;
    private $maxNumJugadores;

    function __construct($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores){  
        parent::__construct($titulo, $numero, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;     
    }
    function muestraJugadoresPosibles(){
        if ($this->maxNumJugadores ==1){
            echo ("Para un jugador<br>");
        }else{
            echo ("Para ".$this->maxNumJugadores." jugadores<br>");
        }
    }
    function muestraResumen(){
        echo ("<br>Juego para: ".$this->consola);
        parent::muestraResumen();
        self::muestraJugadoresPosibles();
        
    }
}
?>