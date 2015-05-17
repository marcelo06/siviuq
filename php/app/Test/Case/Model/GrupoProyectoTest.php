<?php
App::uses('GrupoProyecto', 'Model');

/**
 * GrupoProyecto Test Case
 *
 */
class GrupoProyectoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupo_proyecto',
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
		$this->GrupoProyecto = ClassRegistry::init('GrupoProyecto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GrupoProyecto);

		parent::tearDown();
	}

}
