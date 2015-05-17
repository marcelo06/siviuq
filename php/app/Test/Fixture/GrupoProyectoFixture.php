<?php
/**
 * GrupoProyectoFixture
 *
 */
class GrupoProyectoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_grupo_proyecto' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'grupo_investigacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'proyecto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_grupo_proyecto' => 1,
			'grupo_investigacion_id' => 1,
			'proyecto_id' => 1
		),
	);

}
