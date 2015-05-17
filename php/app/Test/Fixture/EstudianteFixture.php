<?php
/**
 * EstudianteFixture
 *
 */
class EstudianteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_estudiante' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false, 'key' => 'primary'),
		'nombre_completo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'cedula' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'semestre_actual' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'grupo_investigacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'programa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_estudiante', 'unique' => 1)
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
			'id_estudiante' => 1,
			'nombre_completo' => 'Lorem ipsum dolor sit amet',
			'cedula' => 1,
			'semestre_actual' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'telefono' => 1,
			'direccion' => 'Lorem ipsum dolor sit amet',
			'grupo_investigacion_id' => 1,
			'programa_id' => 1
		),
	);

}
