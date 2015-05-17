<?php
App::uses('Patente', 'Model');

/**
 * Patente Test Case
 *
 */
class PatenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.patente',
		'app.grupo_investigacion',
		'app.articulo',
		'app.docente',
		'app.programa',
		'app.estudiante',
		'app.estudiante_semillero',
		'app.semillero',
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
		$this->Patente = ClassRegistry::init('Patente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Patente);

		parent::tearDown();
	}

}
