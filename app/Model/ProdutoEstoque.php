<?php
App::uses('AppModel', 'Model');
/**
 * ProdutoEstoque Model
 *
 * @property Produto $Produto
 */
class ProdutoEstoque extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'produto_estoque';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'quantidade' => array(
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
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'produto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
