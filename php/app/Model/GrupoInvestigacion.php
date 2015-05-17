<?php
App::uses('AppModel', 'Model');
/**
 * GrupoInvestigacion Model
 *
 * @property Articulo $Articulo
 * @property Docente $Docente
 * @property Estudiante $Estudiante
 * @property GrupoProyecto $GrupoProyecto
 * @property LineaGrupo $LineaGrupo
 * @property Patente $Patente
 * @property PropuestaConvocatoria $PropuestaConvocatoria
 * @property Semillero $Semillero
 */
class GrupoInvestigacion extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_grupo_investigacion';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Articulo' => array(
			'className' => 'Articulo',
			'foreignKey' => 'grupo_investigacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Docente' => array(
			'className' => 'Docente',
			'foreignKey' => 'grupo_investigacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'grupo_investigacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'GrupoProyecto' => array(
			'className' => 'GrupoProyecto',
			'foreignKey' => 'grupo_investigacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'LineaGrupo' => array(
			'className' => 'LineaGrupo',
			'foreignKey' => 'grupo_investigacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Patente' => array(
			'className' => 'Patente',
			'foreignKey' => 'grupo_investigacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PropuestaConvocatoria' => array(
			'className' => 'PropuestaConvocatoria',
			'foreignKey' => 'grupo_investigacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Semillero' => array(
			'className' => 'Semillero',
			'foreignKey' => 'grupo_investigacion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
