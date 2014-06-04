<?php
App::uses('AppController', 'Controller');
/**
 * PapersProducttypes Controller
 *
 * @property PapersProducttype $PapersProducttype
 * @property PaginatorComponent $Paginator
 */
class PapersProducttypesController extends AppController {

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
		$this->PapersProducttype->recursive = 0;
		$this->set('papersProducttypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PapersProducttype->exists($id)) {
			throw new NotFoundException(__('Invalid papers producttype'));
		}
		$options = array('conditions' => array('PapersProducttype.' . $this->PapersProducttype->primaryKey => $id));
		$this->set('papersProducttype', $this->PapersProducttype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PapersProducttype->create();
			if ($this->PapersProducttype->save($this->request->data)) {
				$this->Session->setFlash(__('The papers producttype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The papers producttype could not be saved. Please, try again.'));
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
		if (!$this->PapersProducttype->exists($id)) {
			throw new NotFoundException(__('Invalid papers producttype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PapersProducttype->save($this->request->data)) {
				$this->Session->setFlash(__('The papers producttype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The papers producttype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PapersProducttype.' . $this->PapersProducttype->primaryKey => $id));
			$this->request->data = $this->PapersProducttype->find('first', $options);
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
		$this->PapersProducttype->id = $id;
		if (!$this->PapersProducttype->exists()) {
			throw new NotFoundException(__('Invalid papers producttype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PapersProducttype->delete()) {
			$this->Session->setFlash(__('The papers producttype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The papers producttype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
