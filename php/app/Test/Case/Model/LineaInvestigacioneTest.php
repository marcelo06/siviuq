<?php
App::uses('LineaInvestigacione', 'Model');

/**
 * LineaInvestigacione Test Case
 *
 */
class LineaInvestigacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.linea_investigacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LineaInvestigacione = ClassRegistry::init('LineaInvestigacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LineaInvestigacione);

		parent::tearDown();
	}

}
