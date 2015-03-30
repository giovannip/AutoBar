<?php
App::uses('StatusMesa', 'Model');

/**
 * StatusMesa Test Case
 *
 */
class StatusMesaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status_mesa',
		'app.mesa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StatusMesa = ClassRegistry::init('StatusMesa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StatusMesa);

		parent::tearDown();
	}

}
