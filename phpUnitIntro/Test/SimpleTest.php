<?php

namespace phpUnitIntro\Test;

class SimpleTest extends \PHPUnit_Framework_TestCase {
	
    public function testVerdaderoEsVerdadero() {
	  	$variable = true;
			$this->assertTrue($variable);
		}
} 