<?php
class Cliente {
    public $nombre;
    private $numero;
    private $soportesAlquilados = [];
    private $numSoportesAlquilados;
    private $maxAlquilerConcurrente;

    function __construct($nombre,$numero){
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->numSoportesAlquilados = 0;
        $this->soportesAlquilados;
        $this->maxAlquilerConcurrente = 3;
        
    }

    // Getter Numero para obtener el valor de numero
    function getNumero(){
        return $this->numero;
    }

    // Setter Numero para modificar el valor de numero
    function setNumero($numero){
        $this->numero = $numero;
    }

    // Getter Numero de soportes alquilados para obtener el valor de la cantidad de soportes alquilados
    function getNumSoportesAlquilados(){
        return count($this->soportesAlquilados);
    }

    // Mostramos el resumen del cliente
    function muestraResumen(){
        echo ("Nombre: ".$this->nombre."<br>");
        echo ("<strong> El cliente tiene ".count($this->soportesAlquilados)." soportes alquilados</strong>");
    }

    //REVISAR
    function tieneAlquilado(Soporte $s) : bool{
        for ($i=0;$i<count($this->soportesAlquilados);$i++){
            if ($this->soportesAlquilados[$i]["Soporte"]->numero == [$s]->numero){
                return true;
            }else {
                return false;
            }
        }
    }


    function alquilar(Soporte $s) : bool{
        if (in_array($s, $this->soportesAlquilados)){
            echo ("<br>El cliente ya tiene alquilado el soporte <strong>".$s->titulo."</strong><br>");
            return false;
        }else{
            if ($this->numSoportesAlquilados==$this->maxAlquilerConcurrente){
                echo ("<br>Este cliente tiene 3 elementos alquilados. No puede alquilar más en este videoclub hasta que no devuelva algo<br>");
                return false;
            }else{
                array_push($this->soportesAlquilados, $s);
                $this->numSoportesAlquilados++;
                echo ("<br><strong> Alquilado soporte a: </strong>".$this->nombre."<br>");
                $s->muestraResumen();
                return true;
            }
        }
    }

    function devolver($numSoporte) : bool{
        /*foreach ($this->soportesAlquilados as $s) {
            if ($numSoporte == $s->numero){
                array_splice($this->soportesAlquilados, $s);
                echo ("Se ha eliminado el soporte alquilado correctamente");
                return true;
            }else{
                echo ("<br>No se ha podido encontrar el soporte en los alquileres de este cliente<br>");
                return false;
            }
        }*/
        for ($i=0;$i<count($this->soportesAlquilados);$i++){
            if ($numSoporte == $this->soportesAlquilados[$i]->numero){
                array_splice($this->soportesAlquilados,$i);
                echo ("Se ha eliminado el soporte alquilado correctamente");
                return true;
            }else{
                echo ("<br>No se ha podido encontrar el soporte en los alquileres de este cliente<br>");
                return false;
            }
        }
    }

    function listarAlquileres(){
        echo ("<br><strong>El cliente tiene ".$this->numSoportesAlquilados." soportes alquilados</strong><br>");
        foreach ($this->soportesAlquilados as $s) {
            $s->muestraResumen();
        }
    }
}
?>