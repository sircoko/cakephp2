<?php
App::uses('AppController', 'Controller');
/**
 * Bays Controller
 *
 * @property Bay $Bay
 * @property PaginatorComponent $Paginator
 */
class BaysController extends AppController {

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
		$this->Bay->recursive = 0;
		$this->set('bays', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bay->exists($id)) {
			throw new NotFoundException(__('Invalid bay'));
		}
		$options = array('conditions' => array('Bay.' . $this->Bay->primaryKey => $id));
		$this->set('bay', $this->Bay->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bay->create();
			if ($this->Bay->save($this->request->data)) {
				$this->Flash->success(__('The bay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bay could not be saved. Please, try again.'));
			}
		}
		$regions = $this->Bay->Region->find('list');
		$this->set(compact('regions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bay->exists($id)) {
			throw new NotFoundException(__('Invalid bay'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bay->save($this->request->data)) {
				$this->Flash->success(__('The bay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bay could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bay.' . $this->Bay->primaryKey => $id));
			$this->request->data = $this->Bay->find('first', $options);
		}
		$regions = $this->Bay->Region->find('list');
		$this->set(compact('regions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bay->id = $id;
		if (!$this->Bay->exists()) {
			throw new NotFoundException(__('Invalid bay'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bay->delete()) {
			$this->Flash->success(__('The bay has been deleted.'));
		} else {
			$this->Flash->error(__('The bay could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
