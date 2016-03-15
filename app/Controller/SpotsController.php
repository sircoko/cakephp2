<?php
App::uses('AppController', 'Controller');
/**
 * Spots Controller
 *
 * @property Spot $Spot
 * @property PaginatorComponent $Paginator
 */
class SpotsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','CsvView.CsvView');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Spot->recursive = 0;
		$this->set('spots', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Spot->exists($id)) {
			throw new NotFoundException(__('Invalid spot'));
		}
		$options = array('conditions' => array('Spot.' . $this->Spot->primaryKey => $id));
		$this->set('spot', $this->Spot->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Spot->create();
			if ($this->Spot->save($this->request->data)) {
				$this->Flash->success(__('The spot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The spot could not be saved. Please, try again.'));
			}
		}
		$bays = $this->Spot->Bay->find('list');
		$this->set(compact('bays'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Spot->exists($id)) {
			throw new NotFoundException(__('Invalid spot'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Spot->save($this->request->data)) {
				$this->Flash->success(__('The spot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The spot could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Spot.' . $this->Spot->primaryKey => $id));
			$this->request->data = $this->Spot->find('first', $options);
		}
		$bays = $this->Spot->Bay->find('list');
		$this->set(compact('bays'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Spot->id = $id;
		if (!$this->Spot->exists()) {
			throw new NotFoundException(__('Invalid spot'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Spot->delete()) {
			$this->Flash->success(__('The spot has been deleted.'));
		} else {
			$this->Flash->error(__('The spot could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function export(){
		$spots=$this->Spot->find('all');
		$bays = $this->Spot->Bay->find('all');
		$excludePaths = array('Spot.id', 'Bay.id', 'Spot.bay_id','Bay.region_id'); // Exclude all id fields
		$this->CsvView->quickExport($spots,$excludePaths);
		return;

	}
}
