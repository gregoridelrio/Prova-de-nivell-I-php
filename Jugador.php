<?php
enum Posicion
{
  case Portero;
  case Defensa;
  case Centrocampista;
  case Delantero;
}
class Jugador
{
  private string $nombre;
  private int $edad;
  private Posicion $posicion;
  private int $goles;
  private int $amarillas;
  private int $rojas;

  public function __construct(string $nombre, int $edad, Posicion $posicion, int $goles, int $amarillas, int $rojas)
  {
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->posicion = $posicion;
    $this->goles = $goles;
    $this->amarillas = $amarillas;
    $this->rojas = $rojas;
  }

  public function getNombre(): string
  {
    return $this->nombre;
  }

  public function getEdad(): int
  {
    return $this->edad;
  }

  public function getAmarillas(): int
  {
    return $this->amarillas;
  }

  public function getRojas(): int
  {
    return $this->rojas;
  }
}
