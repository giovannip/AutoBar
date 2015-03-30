<?php
App::uses('AppController', 'Controller');
/**
 * ProdutoEstoques Controller
 *
 * @property ProdutoEstoque $ProdutoEstoque
 * @property PaginatorComponent $Paginator
 */
class ProdutoEstoquesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProdutoEstoque->recursive = 0;
		$this->set('produtoEstoques', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProdutoEstoque->exists($id)) {
			throw new NotFoundException(__('Invalid produto estoque'));
		}
		$options = array('conditions' => array('ProdutoEstoque.' . $this->ProdutoEstoque->primaryKey => $id));
		$this->set('produtoEstoque', $this->ProdutoEstoque->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProdutoEstoque->create();
			if ($this->ProdutoEstoque->save($this->request->data)) {
				$this->Session->setFlash(__('The produto estoque has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produto estoque could not be saved. Please, try again.'));
			}
		}
		$produtos = $this->ProdutoEstoque->Produto->find('list');
		$this->set(compact('produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProdutoEstoque->exists($id)) {
			throw new NotFoundException(__('Invalid produto estoque'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProdutoEstoque->save($this->request->data)) {
				$this->Session->setFlash(__('The produto estoque has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produto estoque could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProdutoEstoque.' . $this->ProdutoEstoque->primaryKey => $id));
			$this->request->data = $this->ProdutoEstoque->find('first', $options);
		}
		$produtos = $this->ProdutoEstoque->Produto->find('list');
		$this->set(compact('produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProdutoEstoque->id = $id;
		if (!$this->ProdutoEstoque->exists()) {
			throw new NotFoundException(__('Invalid produto estoque'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProdutoEstoque->delete()) {
			$this->Session->setFlash(__('The produto estoque has been deleted.'));
		} else {
			$this->Session->setFlash(__('The produto estoque could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
