<?php
App::uses('Evaluador', 'Model');

/**
 * Evaluador Test Case
 *
 */
class EvaluadorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evaluador = ClassRegistry::init('Evaluador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evaluador);

		parent::tearDown();
	}

}
