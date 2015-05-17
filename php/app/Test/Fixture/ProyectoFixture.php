<?php
/**
 * ProyectoFixture
 *
 */
class ProyectoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_proyecto' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'docente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'cedula_estudiante1' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'cedula_estudiante2' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'cedula_estudiante3' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'nombre_completo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'duracion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'objetivo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'prorroga' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'estado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'ciudad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'resultado_esperado' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'resultado' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'codigo_aprobacion' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'codigo_inscripcion' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'consecutivo' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'administrador_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'evaluacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'modalidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'linea_investigacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cuadro_verificacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_proyecto', 'unique' => 1)
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
			'id_proyecto' => 1,
			'docente_id' => 1,
			'cedula_estudiante1' => 1,
			'cedula_estudiante2' => 1,
			'cedula_estudiante3' => 1,
			'nombre_completo' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'duracion' => 'Lorem ipsum d',
			'objetivo' => 'Lorem ipsum dolor sit amet',
			'prorroga' => 'Lorem ipsum dolor sit amet',
			'estado' => 'Lorem ipsum dolor ',
			'ciudad' => 'Lorem ipsum dolor ',
			'resultado_esperado' => 'Lorem ipsum dolor sit amet',
			'resultado' => 'Lorem ipsum dolor sit amet',
			'codigo_aprobacion' => 1,
			'codigo_inscripcion' => 1,
			'consecutivo' => 1,
			'administrador_id' => 1,
			'evaluacion_id' => 1,
			'modalidad' => 'Lorem ipsum dolor sit amet',
			'linea_investigacion_id' => 1,
			'cuadro_verificacion_id' => 1,
			'created' => '2015-04-27 02:16:06',
			'modified' => '2015-04-27 02:16:06'
		),
	);

}
