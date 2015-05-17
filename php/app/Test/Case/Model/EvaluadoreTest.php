<?php
App::uses('Evaluadore', 'Model');

/**
 * Evaluadore Test Case
 *
 */
class EvaluadoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluadore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evaluadore = ClassRegistry::init('Evaluadore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evaluadore);

		parent::tearDown();
	}

}
