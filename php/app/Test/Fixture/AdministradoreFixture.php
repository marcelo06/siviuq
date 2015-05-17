<?php
/**
 * AdministradoreFixture
 *
 */
class AdministradoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'identificacion' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false, 'key' => 'primary'),
		'nombre_completo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'descripcion_cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'identificacion', 'unique' => 1)
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
			'identificacion' => 1,
			'nombre_completo' => 'Lorem ipsum dolor sit amet',
			'telefono' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'descripcion_cargo' => 'Lorem ipsum dolor sit amet'
		),
	);

}
