<?php
App::uses('Documento', 'Model');

/**
 * Documento Test Case
 *
 */
class DocumentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.documento',
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
		'app.registro_software'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Documento = ClassRegistry::init('Documento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Documento);

		parent::tearDown();
	}

}
