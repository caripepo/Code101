<?php
App::uses('AppController', 'Controller');
/**
 * Pricetiers Controller
 *
 * @property Pricetier $Pricetier
 * @property PaginatorComponent $Paginator
 */
class PricetiersController extends AppController {

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
		$this->Pricetier->recursive = 0;
		$this->set('pricetiers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pricetier->exists($id)) {
			throw new NotFoundException(__('Invalid pricetier'));
		}
		$options = array('conditions' => array('Pricetier.' . $this->Pricetier->primaryKey => $id));
		$this->set('pricetier', $this->Pricetier->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pricetier->create();
			if ($this->Pricetier->save($this->request->data)) {
				$this->Session->setFlash(__('The pricetier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pricetier could not be saved. Please, try again.'));
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
		if (!$this->Pricetier->exists($id)) {
			throw new NotFoundException(__('Invalid pricetier'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pricetier->save($this->request->data)) {
				$this->Session->setFlash(__('The pricetier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pricetier could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pricetier.' . $this->Pricetier->primaryKey => $id));
			$this->request->data = $this->Pricetier->find('first', $options);
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
		$this->Pricetier->id = $id;
		if (!$this->Pricetier->exists()) {
			throw new NotFoundException(__('Invalid pricetier'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pricetier->delete()) {
			$this->Session->setFlash(__('The pricetier has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pricetier could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
