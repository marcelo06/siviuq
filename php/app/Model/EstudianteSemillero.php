<?php
App::uses('AppModel', 'Model');
/**
 * EstudianteSemillero Model
 *
 * @property Estudiante $Estudiante
 * @property Semillero $Semillero
 */
class EstudianteSemillero extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_estudiante_semillero';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'estudiante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Semillero' => array(
			'className' => 'Semillero',
			'foreignKey' => 'semillero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
