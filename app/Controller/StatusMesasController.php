<?php
App::uses('AppController', 'Controller');
/**
 * StatusMesas Controller
 *
 * @property StatusMesa $StatusMesa
 * @property PaginatorComponent $Paginator
 */
class StatusMesasController extends AppController {

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
		$this->StatusMesa->recursive = 0;
		$this->set('statusMesas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StatusMesa->exists($id)) {
			throw new NotFoundException(__('Invalid status mesa'));
		}
		$options = array('conditions' => array('StatusMesa.' . $this->StatusMesa->primaryKey => $id));
		$this->set('statusMesa', $this->StatusMesa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StatusMesa->create();
			if ($this->StatusMesa->save($this->request->data)) {
				$this->Session->setFlash(__('The status mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status mesa could not be saved. Please, try again.'));
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
		if (!$this->StatusMesa->exists($id)) {
			throw new NotFoundException(__('Invalid status mesa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StatusMesa->save($this->request->data)) {
				$this->Session->setFlash(__('The status mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status mesa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StatusMesa.' . $this->StatusMesa->primaryKey => $id));
			$this->request->data = $this->StatusMesa->find('first', $options);
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
		$this->StatusMesa->id = $id;
		if (!$this->StatusMesa->exists()) {
			throw new NotFoundException(__('Invalid status mesa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StatusMesa->delete()) {
			$this->Session->setFlash(__('The status mesa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The status mesa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
