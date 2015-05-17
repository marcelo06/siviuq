<?php
/**
 * ArticuloFixture
 *
 */
class ArticuloFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_articulo' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'tamano' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'grupo_investigacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'identificacion_autor' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_articulo', 'unique' => 1)
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
			'id_articulo' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'tamano' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'grupo_investigacion_id' => 1,
			'identificacion_autor' => 1,
			'created' => '2015-04-27 01:24:54',
			'modified' => '2015-04-27 01:24:54'
		),
	);

}
