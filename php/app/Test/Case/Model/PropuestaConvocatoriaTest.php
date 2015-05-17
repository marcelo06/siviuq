<?php
App::uses('PropuestaConvocatoria', 'Model');

/**
 * PropuestaConvocatoria Test Case
 *
 */
class PropuestaConvocatoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.propuesta_convocatoria',
		'app.convocatoria',
		'app.administrador',
		'app.cuadro_verificacion',
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
		'app.evaluacion',
		'app.evaluador',
		'app.documento',
		'app.registro_software'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropuestaConvocatoria = ClassRegistry::init('PropuestaConvocatoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropuestaConvocatoria);

		parent::tearDown();
	}

}
