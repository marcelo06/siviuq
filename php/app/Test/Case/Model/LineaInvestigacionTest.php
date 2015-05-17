<?php
App::uses('LineaInvestigacion', 'Model');

/**
 * LineaInvestigacion Test Case
 *
 */
class LineaInvestigacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.linea_investigacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LineaInvestigacion = ClassRegistry::init('LineaInvestigacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LineaInvestigacion);

		parent::tearDown();
	}

}
