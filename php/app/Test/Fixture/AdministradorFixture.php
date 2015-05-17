<?php
/**
 * AdministradorFixture
 *
 */
class AdministradorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_administrador' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false, 'key' => 'primary'),
		'nombre_completo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'cedula' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'telefono' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'descripcion_cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_administrador', 'unique' => 1)
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
			'id_administrador' => 1,
			'nombre_completo' => 'Lorem ipsum dolor sit amet',
			'cedula' => 1,
			'telefono' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'descripcion_cargo' => 'Lorem ipsum dolor sit amet'
		),
	);

}
