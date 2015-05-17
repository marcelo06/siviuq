<?php
App::uses('Programa', 'Model');

/**
 * Programa Test Case
 *
 */
class ProgramaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.programa',
		'app.docente',
		'app.grupo_investigacion',
		'app.proyecto',
		'app.estudiante1',
		'app.estudiante2',
		'app.estudiante3',
		'app.ciudad',
		'app.administrador',
		'app.cuadro_verificacion',
		'app.evaluacion',
		'app.modalidad',
		'app.linea_investigacion',
		'app.documento',
		'app.registro_software',
		'app.estudiante',
		'app.estudiante_semillero',
		'app.semillero'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Programa = ClassRegistry::init('Programa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Programa);

		parent::tearDown();
	}

}
