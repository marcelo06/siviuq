<?php
App::uses('Proyecto', 'Model');

/**
 * Proyecto Test Case
 *
 */
class ProyectoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Proyecto = ClassRegistry::init('Proyecto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proyecto);

		parent::tearDown();
	}

}
