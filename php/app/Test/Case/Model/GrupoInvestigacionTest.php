<?php
App::uses('GrupoInvestigacion', 'Model');

/**
 * GrupoInvestigacion Test Case
 *
 */
class GrupoInvestigacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupo_investigacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GrupoInvestigacion = ClassRegistry::init('GrupoInvestigacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GrupoInvestigacion);

		parent::tearDown();
	}

}
