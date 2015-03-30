<?php
App::uses('StatusContaMesa', 'Model');

/**
 * StatusContaMesa Test Case
 *
 */
class StatusContaMesaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status_conta_mesa',
		'app.conta_mesa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StatusContaMesa = ClassRegistry::init('StatusContaMesa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StatusContaMesa);

		parent::tearDown();
	}

}
