<?php
App::uses('AppModel', 'Model');
/**
 * GrupoProyecto Model
 *
 * @property GrupoInvestigacion $GrupoInvestigacion
 * @property Proyecto $Proyecto
 */
class GrupoProyecto extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'proyecto_id';


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
		'Proyecto' => array(
			'className' => 'Proyecto',
			'foreignKey' => 'proyecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
