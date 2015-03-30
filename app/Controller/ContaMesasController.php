<?php
App::uses('AppController', 'Controller');
/**
 * ContaMesas Controller
 *
 * @property ContaMesa $ContaMesa
 * @property PaginatorComponent $Paginator
 */
class ContaMesasController extends AppController {

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
		$this->ContaMesa->recursive = 0;
		$this->set('contaMesas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContaMesa->exists($id)) {
			throw new NotFoundException(__('Invalid conta mesa'));
		}
		$options = array('conditions' => array('ContaMesa.' . $this->ContaMesa->primaryKey => $id));
		$this->set('contaMesa', $this->ContaMesa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContaMesa->create();
			if ($this->ContaMesa->save($this->request->data)) {
				$this->Session->setFlash(__('The conta mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conta mesa could not be saved. Please, try again.'));
			}
		}
		$mesas = $this->ContaMesa->Mesa->find('list');
		$statusContaMesas = $this->ContaMesa->StatusContaMesa->find('list');
		$this->set(compact('mesas', 'statusContaMesas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ContaMesa->exists($id)) {
			throw new NotFoundException(__('Invalid conta mesa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContaMesa->save($this->request->data)) {
				$this->Session->setFlash(__('The conta mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conta mesa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContaMesa.' . $this->ContaMesa->primaryKey => $id));
			$this->request->data = $this->ContaMesa->find('first', $options);
		}
		$mesas = $this->ContaMesa->Mesa->find('list');
		$statusContaMesas = $this->ContaMesa->StatusContaMesa->find('list');
		$this->set(compact('mesas', 'statusContaMesas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ContaMesa->id = $id;
		if (!$this->ContaMesa->exists()) {
			throw new NotFoundException(__('Invalid conta mesa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContaMesa->delete()) {
			$this->Session->setFlash(__('The conta mesa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The conta mesa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
