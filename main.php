<?php
require_once "Jugador.php";
require_once "Equipo.php";

$jugador1 = new Jugador("Rodigo", 20, Posicion::Delantero, 5, 0, 0);
$jugador2 = new Jugador("Messi", 20, Posicion::Centrocampista, 30, 0, 0);
$jugador3 = new Jugador("Ronaldinho", 40, Posicion::Delantero, 15, 3, 0);
$jugador4 = new Jugador("Puyol", 41, Posicion::Defensa, 0, 0, 2);

$equipo = new Equipo();
$equipo->anadirJugador($jugador1);
$equipo->anadirJugador($jugador2);
$equipo->anadirJugador($jugador3);
$equipo->anadirJugador($jugador4);

$menosVentiuno = $equipo->buscarMenosVentiuno();
foreach ($menosVentiuno as $jugador) {
  echo $jugador->getNombre() . PHP_EOL;
}

$jugadorMasTarjetas = $equipo->buscarMasTarjetero();
echo $jugadorMasTarjetas->getNombre();
