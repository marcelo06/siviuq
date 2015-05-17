<?php
App::uses('GrupoInvestigacione', 'Model');

/**
 * GrupoInvestigacione Test Case
 *
 */
class GrupoInvestigacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupo_investigacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GrupoInvestigacione = ClassRegistry::init('GrupoInvestigacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GrupoInvestigacione);

		parent::tearDown();
	}

}
