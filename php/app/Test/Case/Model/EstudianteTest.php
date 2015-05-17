<?php
App::uses('Estudiante', 'Model');

/**
 * Estudiante Test Case
 *
 */
class EstudianteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estudiante',
		'app.grupo_investigacion',
		'app.programa',
		'app.docente',
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
		$this->Estudiante = ClassRegistry::init('Estudiante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Estudiante);

		parent::tearDown();
	}

}
