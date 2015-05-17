<?php
/**
 * CuadroVerificacioneFixture
 *
 */
class CuadroVerificacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_cuadro_verificacion' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'asignacion_horas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'auxiliar_investigacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'bibliografia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'coinvestigadores' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'cronograma' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'descripcion_gastos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'estado_general' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'estudiantes_investigacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'estrategia_comunicacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'impacto_social' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'investigador_principal' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'justificacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'linea_investigacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'marco_teorico' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'materiales_insumos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'metodologia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'modalidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'objetivo_general' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'objetivos_especificos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'observaciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'otros_rubros' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'planteamiento_problema' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'presentacion_vigencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'presupuesto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'resultados_esperados' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'software_adquirido' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'titulo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'viajes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'administrador_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_cuadro_verificacion', 'unique' => 1)
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
			'id_cuadro_verificacion' => 1,
			'asignacion_horas' => 'Lorem ipsum dolor sit amet',
			'auxiliar_investigacion' => 'Lorem ipsum dolor sit amet',
			'bibliografia' => 'Lorem ipsum dolor sit amet',
			'coinvestigadores' => 'Lorem ipsum dolor sit amet',
			'cronograma' => 'Lorem ipsum dolor sit amet',
			'descripcion_gastos' => 'Lorem ipsum dolor sit amet',
			'estado_general' => 'Lorem ipsum dolor sit amet',
			'estudiantes_investigacion' => 'Lorem ipsum dolor sit amet',
			'estrategia_comunicacion' => 'Lorem ipsum dolor sit amet',
			'impacto_social' => 'Lorem ipsum dolor sit amet',
			'investigador_principal' => 'Lorem ipsum dolor sit amet',
			'justificacion' => 'Lorem ipsum dolor sit amet',
			'linea_investigacion' => 'Lorem ipsum dolor sit amet',
			'marco_teorico' => 'Lorem ipsum dolor sit amet',
			'materiales_insumos' => 'Lorem ipsum dolor sit amet',
			'metodologia' => 'Lorem ipsum dolor sit amet',
			'modalidad' => 'Lorem ipsum dolor sit amet',
			'objetivo_general' => 'Lorem ipsum dolor sit amet',
			'objetivos_especificos' => 'Lorem ipsum dolor sit amet',
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'otros_rubros' => 'Lorem ipsum dolor sit amet',
			'planteamiento_problema' => 'Lorem ipsum dolor sit amet',
			'presentacion_vigencia' => 'Lorem ipsum dolor sit amet',
			'presupuesto' => 'Lorem ipsum dolor sit amet',
			'resultados_esperados' => 'Lorem ipsum dolor sit amet',
			'software_adquirido' => 'Lorem ipsum dolor sit amet',
			'titulo' => 'Lorem ipsum dolor sit amet',
			'viajes' => 'Lorem ipsum dolor sit amet',
			'administrador_id' => 1,
			'created' => '2015-04-26 21:25:29',
			'modified' => '2015-04-26 21:25:29'
		),
	);

}
