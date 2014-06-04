<?php
App::uses('AppController', 'Controller');
/**
 * Postages Controller
 *
 * @property Postage $Postage
 * @property PaginatorComponent $Paginator
 */
class PostagesController extends AppController {

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
		$this->Postage->recursive = 0;
		$this->set('postages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Postage->exists($id)) {
			throw new NotFoundException(__('Invalid postage'));
		}
		$options = array('conditions' => array('Postage.' . $this->Postage->primaryKey => $id));
		$this->set('postage', $this->Postage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Postage->create();
			if ($this->Postage->save($this->request->data)) {
				$this->Session->setFlash(__('The postage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postage could not be saved. Please, try again.'));
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
		if (!$this->Postage->exists($id)) {
			throw new NotFoundException(__('Invalid postage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Postage->save($this->request->data)) {
				$this->Session->setFlash(__('The postage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Postage.' . $this->Postage->primaryKey => $id));
			$this->request->data = $this->Postage->find('first', $options);
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
		$this->Postage->id = $id;
		if (!$this->Postage->exists()) {
			throw new NotFoundException(__('Invalid postage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Postage->delete()) {
			$this->Session->setFlash(__('The postage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The postage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
