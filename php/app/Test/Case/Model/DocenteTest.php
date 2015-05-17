<?php
App::uses('Docente', 'Model');

/**
 * Docente Test Case
 *
 */
class DocenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docente',
		'app.grupo_investigacion',
		'app.articulo',
		'app.estudiante',
		'app.programa',
		'app.estudiante_semillero',
		'app.semillero',
		'app.grupo_proyecto',
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
		'app.linea_grupo',
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
		$this->Docente = ClassRegistry::init('Docente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Docente);

		parent::tearDown();
	}

}
