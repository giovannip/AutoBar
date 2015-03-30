<?php
App::uses('AppModel', 'Model');
/**
 * ContaMesa Model
 *
 * @property Mesa $Mesa
 * @property StatusContaMesa $StatusContaMesa
 */
class ContaMesa extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'conta_mesa';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'valor' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Mesa' => array(
			'className' => 'Mesa',
			'foreignKey' => 'mesa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StatusContaMesa' => array(
			'className' => 'StatusContaMesa',
			'foreignKey' => 'status_conta_mesa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
