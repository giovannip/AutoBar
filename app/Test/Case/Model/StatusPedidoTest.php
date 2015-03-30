<?php
App::uses('StatusPedido', 'Model');

/**
 * StatusPedido Test Case
 *
 */
class StatusPedidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status_pedido'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StatusPedido = ClassRegistry::init('StatusPedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StatusPedido);

		parent::tearDown();
	}

}
