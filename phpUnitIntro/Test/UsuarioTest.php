<?php

namespace phpUnitIntro\Test;

use phpUnitIntro\Usuario;

class UserTest extends \PHPUnit_Framework_TestCase 
{
	public function testHablar() 
	{
		$usuario = new Usuario();
		
		$esperado = "Hola PHPUnit!";
		$actual = $usuario->hablar();
		$this->assertEquals($esperado, $actual);
	}
}