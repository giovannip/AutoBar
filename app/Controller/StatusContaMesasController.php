<?php
App::uses('AppController', 'Controller');
/**
 * StatusContaMesas Controller
 *
 * @property StatusContaMesa $StatusContaMesa
 * @property PaginatorComponent $Paginator
 */
class StatusContaMesasController extends AppController {

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
		$this->StatusContaMesa->recursive = 0;
		$this->set('statusContaMesas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StatusContaMesa->exists($id)) {
			throw new NotFoundException(__('Invalid status conta mesa'));
		}
		$options = array('conditions' => array('StatusContaMesa.' . $this->StatusContaMesa->primaryKey => $id));
		$this->set('statusContaMesa', $this->StatusContaMesa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StatusContaMesa->create();
			if ($this->StatusContaMesa->save($this->request->data)) {
				$this->Session->setFlash(__('The status conta mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status conta mesa could not be saved. Please, try again.'));
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
		if (!$this->StatusContaMesa->exists($id)) {
			throw new NotFoundException(__('Invalid status conta mesa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StatusContaMesa->save($this->request->data)) {
				$this->Session->setFlash(__('The status conta mesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status conta mesa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StatusContaMesa.' . $this->StatusContaMesa->primaryKey => $id));
			$this->request->data = $this->StatusContaMesa->find('first', $options);
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
		$this->StatusContaMesa->id = $id;
		if (!$this->StatusContaMesa->exists()) {
			throw new NotFoundException(__('Invalid status conta mesa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StatusContaMesa->delete()) {
			$this->Session->setFlash(__('The status conta mesa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The status conta mesa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
