<?php 

namespace phpUnitIntro;

class Usuario 
{
	protected $nombre;
	
	public function getNombre() {
		return $this->nombre;
	}
	
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	
	public function hablar() {
		return "Hola PHPUnit!";
	}
}