<?php
/**
 * EvaluacioneFixture
 *
 */
class EvaluacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_evaluacion' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cronograma' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'estado_tema' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'estrategias_comunicacion' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'investigador_principal' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'impacto_social' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'justificacion' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'metodologia' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'objetivos' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'planteamineto' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'presupuesto' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'producto_esperado' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'resultado_esperado' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'calificacion_total' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'concepto_evaluador' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'observacion' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'fecha_limite_entrega' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_entrega' => array('type' => 'date', 'null' => false, 'default' => null),
		'identificacion_evaluador' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_evaluacion', 'unique' => 1)
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
			'id_evaluacion' => 1,
			'cronograma' => 1,
			'estado_tema' => 1,
			'estrategias_comunicacion' => 1,
			'investigador_principal' => 1,
			'impacto_social' => 1,
			'justificacion' => 1,
			'metodologia' => 1,
			'objetivos' => 1,
			'planteamineto' => 1,
			'presupuesto' => 1,
			'producto_esperado' => 1,
			'resultado_esperado' => 1,
			'calificacion_total' => 1,
			'concepto_evaluador' => 1,
			'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fecha_limite_entrega' => '2015-04-26',
			'fecha_entrega' => '2015-04-26',
			'identificacion_evaluador' => 1,
			'created' => '2015-04-26 22:54:52',
			'modified' => '2015-04-26 22:54:52'
		),
	);

}
