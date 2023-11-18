<?php
class Juego extends Soporte{
    public $consola;
    private $minNumJugadores;
    private $maxNumJugadores;

    // Constructor Juego
    function __construct($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores){  
        parent::__construct($titulo, $numero, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;     
    }

    // Muestra si el juego es para 1 o más jugadores
    function muestraJugadoresPosibles(){
        if ($this->maxNumJugadores ==1){
            echo ("Para un jugador<br>");
        }else{
            echo ("Para ".$this->maxNumJugadores." jugadores<br>");
        }
    }

    // Muestra el resumen que hereda de la clase Soporte
    function muestraResumen(){
        echo ("<br>Juego para: ".$this->consola);
        parent::muestraResumen();
        self::muestraJugadoresPosibles();
        
    }
}
?>