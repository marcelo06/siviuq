<?php
App::uses('Articulo', 'Model');

/**
 * Articulo Test Case
 *
 */
class ArticuloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.articulo',
		'app.grupo_investigacion',
		'app.docente',
		'app.programa',
		'app.estudiante',
		'app.estudiante_semillero',
		'app.semillero',
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
		'app.grupo_proyecto',
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
		$this->Articulo = ClassRegistry::init('Articulo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Articulo);

		parent::tearDown();
	}

}
