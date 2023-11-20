<?php
include_once "Soporte.php";
include_once "Cliente.php";
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";

class Videoclub {
    private $nombre;
    private $productos = [];
    private $numProductos;
    private $socios = [];
    private $numSocios;

    function __construct($nombre){
        $this->nombre = $nombre;
        $this->productos;
        $this->numProductos = 0;
        $this->socios;
        $this->numSocios = 0;
    }

    private function incluirProducto(){
        array_push($this->productos);
    }

    function incluirCintaVideo($titulo, $precio, $duracion){
        $Cinta = new CintaVideo($titulo, count($this->productos), $precio, $duracion);
        array_push($this->productos, $Cinta);
    }

    function incluirDvd($titulo, $precio, $idiomas, $pantalla){
        $Dvd = new Dvd($titulo, count($this->productos), $precio, $idiomas, $pantalla);
        array_push($this->productos, $Dvd);
    }

    function incluirJuego($titulo, $precio, $consola, $minJ, $maxJ){
        $Juego = new Juego($titulo, count($this->productos), $precio, $consola, $minJ, $maxJ);
        array_push($this->productos, $Juego);
    }

    function incluirSocio($nombre, $maxAlquileresConcurrentes = 3){
        
    }

    function listarProductos(){
        echo ("Listado de los ".count($this->productos)." productos disponibles");
        
        //var_dump($this->productos);
        /*foreach ($this->productos as $key => $producto) {
            var_dump($producto);
        }*/
        for ($i = 0;$i<count($this->productos);$i++){
            echo (($i+1). ".- ");
            echo ("<br><i>".$this->productos["titulo"]."</i><br>");
            echo ($this->productos->titulo." € (IVA no incluido)<br>");
        }
        
    }

    function listarSocios(){

    }

    function alquilarSocioProducto($numeroCliente, $numeroProducto){
        
    }
}
?>