<?php
App::uses('Evaluacion', 'Model');

/**
 * Evaluacion Test Case
 *
 */
class EvaluacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluacion',
		'app.evaluador',
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
		'app.estudiante1',
		'app.estudiante2',
		'app.estudiante3',
		'app.ciudad',
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
		$this->Evaluacion = ClassRegistry::init('Evaluacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evaluacion);

		parent::tearDown();
	}

}
