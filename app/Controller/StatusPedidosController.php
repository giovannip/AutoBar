<?php
App::uses('AppController', 'Controller');
/**
 * StatusPedidos Controller
 *
 * @property StatusPedido $StatusPedido
 * @property PaginatorComponent $Paginator
 */
class StatusPedidosController extends AppController {

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
		$this->StatusPedido->recursive = 0;
		$this->set('statusPedidos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StatusPedido->exists($id)) {
			throw new NotFoundException(__('Invalid status pedido'));
		}
		$options = array('conditions' => array('StatusPedido.' . $this->StatusPedido->primaryKey => $id));
		$this->set('statusPedido', $this->StatusPedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StatusPedido->create();
			if ($this->StatusPedido->save($this->request->data)) {
				$this->Session->setFlash(__('The status pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status pedido could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StatusPedido->exists($id)) {
			throw new NotFoundException(__('Invalid status pedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StatusPedido->save($this->request->data)) {
				$this->Session->setFlash(__('The status pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status pedido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StatusPedido.' . $this->StatusPedido->primaryKey => $id));
			$this->request->data = $this->StatusPedido->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StatusPedido->id = $id;
		if (!$this->StatusPedido->exists()) {
			throw new NotFoundException(__('Invalid status pedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StatusPedido->delete()) {
			$this->Session->setFlash(__('The status pedido has been deleted.'));
		} else {
			$this->Session->setFlash(__('The status pedido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
