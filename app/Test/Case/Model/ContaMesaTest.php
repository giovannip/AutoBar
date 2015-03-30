<?php
App::uses('ContaMesa', 'Model');

/**
 * ContaMesa Test Case
 *
 */
class ContaMesaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.conta_mesa',
		'app.mesa',
		'app.status_mesa',
		'app.pedido',
		'app.produto',
		'app.status_pedido',
		'app.status_conta_mesa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContaMesa = ClassRegistry::init('ContaMesa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContaMesa);

		parent::tearDown();
	}

}
