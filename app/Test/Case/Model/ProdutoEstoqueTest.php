<?php
App::uses('ProdutoEstoque', 'Model');

/**
 * ProdutoEstoque Test Case
 *
 */
class ProdutoEstoqueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.produto_estoque',
		'app.produto',
		'app.pedido',
		'app.mesa',
		'app.status_mesa',
		'app.status_produto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProdutoEstoque = ClassRegistry::init('ProdutoEstoque');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProdutoEstoque);

		parent::tearDown();
	}

}
