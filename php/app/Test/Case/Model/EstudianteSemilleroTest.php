<?php
App::uses('EstudianteSemillero', 'Model');

/**
 * EstudianteSemillero Test Case
 *
 */
class EstudianteSemilleroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estudiante_semillero',
		'app.estudiante',
		'app.grupo_investigacion',
		'app.articulo',
		'app.docente',
		'app.programa',
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
		'app.convocatoria',
		'app.semillero'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EstudianteSemillero = ClassRegistry::init('EstudianteSemillero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EstudianteSemillero);

		parent::tearDown();
	}

}
