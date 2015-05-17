<?php
App::uses('Convocatoria', 'Model');

/**
 * Convocatoria Test Case
 *
 */
class ConvocatoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.propuesta_convocatoria',
		'app.estudiante1',
		'app.estudiante2',
		'app.estudiante3',
		'app.ciudad',
		'app.evaluacion',
		'app.modalidad',
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
		$this->Convocatoria = ClassRegistry::init('Convocatoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Convocatoria);

		parent::tearDown();
	}

}
