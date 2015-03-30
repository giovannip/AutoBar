<?php
App::uses('AppModel', 'Model');
/**
 * Pedido Model
 *
 * @property Produto $Produto
 * @property Mesa $Mesa
 * @property StatusPedido $StatusPedido
 */
class Pedido extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'pedido';


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
		),
		'Mesa' => array(
			'className' => 'Mesa',
			'foreignKey' => 'mesa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StatusPedido' => array(
			'className' => 'StatusPedido',
			'foreignKey' => 'status_pedido_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
