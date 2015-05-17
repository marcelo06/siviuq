<?php
App::uses('CuadroVerificacione', 'Model');

/**
 * CuadroVerificacione Test Case
 *
 */
class CuadroVerificacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cuadro_verificacione',
		'app.administrador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CuadroVerificacione = ClassRegistry::init('CuadroVerificacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CuadroVerificacione);

		parent::tearDown();
	}

}
