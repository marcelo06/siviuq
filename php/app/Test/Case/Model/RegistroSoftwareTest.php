<?php
App::uses('RegistroSoftware', 'Model');

/**
 * RegistroSoftware Test Case
 *
 */
class RegistroSoftwareTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registro_software',
		'app.proyecto',
		'app.docente',
		'app.grupo_investigacion',
		'app.articulo',
		'app.estudiante',
		'app.programa',
		'app.estudiante_semillero',
		'app.semillero',
		'app.grupo_proyecto',
		'app.linea_grupo',
		'app.linea_investigacion',
		'app.patente',
		'app.propuesta_convocatoria',
		'app.convocatoria',
		'app.administrador',
		'app.cuadro_verificacion',
		'app.evaluacion',
		'app.evaluador',
		'app.documento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RegistroSoftware = ClassRegistry::init('RegistroSoftware');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegistroSoftware);

		parent::tearDown();
	}

}
