<?php
App::uses('CuadroVerificacionsController', 'Controller');

/**
 * CuadroVerificacionsController Test Case
 *
 */
class CuadroVerificacionsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cuadro_verificacion',
		'app.administrador',
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
		'app.evaluacion',
		'app.evaluador',
		'app.documento',
		'app.registro_software'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
