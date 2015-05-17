<?php
/**
 * DocenteFixture
 *
 */
class DocenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_docente' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false, 'key' => 'primary'),
		'nombre_completo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'clasificacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'cedula' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'dedicacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'anio_vinculacion' => array('type' => 'date', 'null' => false, 'default' => null),
		'grupo_investigacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'representante' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'unsigned' => false),
		'programa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_docente', 'unique' => 1)
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
			'id_docente' => 1,
			'nombre_completo' => 'Lorem ipsum dolor sit amet',
			'clasificacion' => 'Lorem ipsum dolor sit amet',
			'cedula' => 1,
			'dedicacion' => 'Lorem ipsum dolor sit amet',
			'anio_vinculacion' => '2015-04-27',
			'grupo_investigacion_id' => 1,
			'representante' => 1,
			'programa_id' => 1
		),
	);

}
