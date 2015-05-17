<?php
/**
 * LineaGrupoFixture
 *
 */
class LineaGrupoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_linea_grupo' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'grupo_investigacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'linea_investigacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_linea_grupo', 'unique' => 1)
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
			'id_linea_grupo' => 1,
			'grupo_investigacion_id' => 1,
			'linea_investigacion_id' => 1
		),
	);

}
