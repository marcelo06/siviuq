<?php
App::uses('LineaGrupo', 'Model');

/**
 * LineaGrupo Test Case
 *
 */
class LineaGrupoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.linea_grupo',
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
		$this->LineaGrupo = ClassRegistry::init('LineaGrupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LineaGrupo);

		parent::tearDown();
	}

}
