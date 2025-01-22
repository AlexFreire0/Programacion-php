<?php
error_reporting(E_ALL);

Class Personaje {

    public $nombre;
    public $nivel;
    public $puntosVida;
    public $puntosAtaque;

    public function atacar(Personaje $objetivo) {
        echo "{$this->nombre} se dispone a atacar a {$objetivo->nombre}, restándole {$this->puntosAtaque} de vida.\n";
        $objetivo->puntosVida -= $this->puntosAtaque;

    
        if ($objetivo->puntosVida < 0) {
            $objetivo->puntosVida = 0;
        }

        echo "{$objetivo->nombre} ahora tiene {$objetivo->puntosVida} puntos de vida.\n";
    }

    public function curarse() {

        $curacion = 20;


        echo "{$this->nombre} ha decidido sanarse a sí mismo.\n";


        $this->puntosVida += $curacion;
        if ($this->puntosVida > 100) {
            $this->puntosVida = 100;
        }

        echo "{$this->nombre} se ha curado {$curacion} puntos. Ahora tiene {$this->puntosVida} puntos de vida.\n";
    }

    public function subirNivel() {
        $this->nivel++;
        $this->puntosVida += 20;
        $this->puntosAtaque += 15;

        echo "{$this->nombre} acaba de subir al nivel {$this->nivel}. Ahora tiene {$this->puntosVida} puntos de vida y {$this->puntosAtaque} puntos de ataque.\n";
    }
}


$Personaje1 = new Personaje();
$Personaje1->nombre = "Alex";
$Personaje1->nivel = 1;
$Personaje1->puntosVida = 15;
$Personaje1->puntosAtaque = 20;

$Personaje2 = new Personaje();
$Personaje2->nombre = "Elfo salvaje";
$Personaje2->nivel = 1;
$Personaje2->puntosVida = 50;
$Personaje2->puntosAtaque = 10;


$Personaje1->atacar($Personaje2);
$Personaje2->curarse();
$Personaje1->subirNivel();
$Personaje2->atacar($Personaje1);
?>