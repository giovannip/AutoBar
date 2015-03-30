<?php
/**
 * ContaMesaFixture
 *
 */
class ContaMesaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'conta_mesa';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'mesa_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'status_conta_mesa_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'valor' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'conta_x_mesa_idx' => array('column' => 'mesa_id', 'unique' => 0),
			'conta_x_status_idx' => array('column' => 'status_conta_mesa_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'created' => '2015-03-30 22:26:35',
			'modified' => '2015-03-30 22:26:35',
			'mesa_id' => '',
			'status_conta_mesa_id' => '',
			'valor' => 1
		),
	);

}
