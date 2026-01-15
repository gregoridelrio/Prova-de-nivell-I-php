<?php
class Equipo
{
  private array $jugadores = [];
  private int $valorRojas = 2;

  public function anadirJugador(Jugador $jugador): void
  {
    $this->jugadores[] = $jugador;
  }

  public function buscarMenosVentiuno(): array
  {
    $jugadoresMenosVentiuno = [];
    foreach ($this->jugadores as $jugador) {
      if ($jugador->getEdad() <= 21) {
        $jugadoresMenosVentiuno[] = $jugador;
      }
    }
    return $jugadoresMenosVentiuno;
  }

  public function buscarMasTarjetero(): Jugador
  {
    $tarjetas = 0;
    foreach ($this->jugadores as $jugador) {
      $tarjetasJugador = 0;
      $tarjetasJugador += $jugador->getAmarillas();
      $tarjetasJugador += $jugador->getRojas() * $this->valorRojas;
      if ($tarjetasJugador > $tarjetas) {
        $jugadorMasTarjetas = $jugador;
        $tarjetas = $tarjetasJugador;
      }
    }
    return $jugadorMasTarjetas;
  }
}
