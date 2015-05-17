<?php
/**
 * DocumentoFixture
 *
 */
class DocumentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_documento' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'tamano' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'proyecto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_documento', 'unique' => 1)
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
			'id_documento' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'tamano' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'proyecto_id' => 1,
			'created' => '2015-04-27 02:29:56',
			'modified' => '2015-04-27 02:29:56'
		),
	);

}
