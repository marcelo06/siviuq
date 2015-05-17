<?php
App::uses('Semillero', 'Model');

/**
 * Semillero Test Case
 *
 */
class SemilleroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.semillero',
		'app.grupo_investigacion',
		'app.articulo',
		'app.docente',
		'app.programa',
		'app.estudiante',
		'app.estudiante_semillero',
		'app.proyecto',
		'app.administrador',
		'app.cuadro_verificacion',
		'app.evaluacion',
		'app.evaluador',
		'app.linea_investigacion',
		'app.linea_grupo',
		'app.documento',
		'app.registro_software',
		'app.grupo_proyecto',
		'app.patente',
		'app.propuesta_convocatoria',
		'app.convocatoria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Semillero = ClassRegistry::init('Semillero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Semillero);

		parent::tearDown();
	}

}
