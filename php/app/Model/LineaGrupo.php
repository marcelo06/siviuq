<?php
App::uses('AppModel', 'Model');
/**
 * LineaGrupo Model
 *
 * @property GrupoInvestigacion $GrupoInvestigacion
 * @property LineaInvestigacion $LineaInvestigacion
 */
class LineaGrupo extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_linea_grupo';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'GrupoInvestigacion' => array(
			'className' => 'GrupoInvestigacion',
			'foreignKey' => 'grupo_investigacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LineaInvestigacion' => array(
			'className' => 'LineaInvestigacion',
			'foreignKey' => 'linea_investigacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
