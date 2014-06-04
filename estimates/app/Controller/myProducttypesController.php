<?php
App::uses('AppController', 'Controller');
/**
 * Producttypes Controller
 *
 * @property Producttype $Producttype
 * @property PaginatorComponent $Paginator
 */
class ProducttypesController extends AppController {

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
        $testi = $this->Producttype->fetchall();
        debug($testi);//die;
		$this->Producttype->recursive = 0;
		$this->set('producttypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Producttype->exists($id)) {
			throw new NotFoundException(__('Invalid producttype'));
		}
		$options = array('conditions' => array('Producttype.' . $this->Producttype->primaryKey => $id));
		$this->set('producttype', $this->Producttype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Producttype->create();
			if ($this->Producttype->save($this->request->data)) {
				$this->Session->setFlash(__('The producttype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producttype could not be saved. Please, try again.'));
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
		if (!$this->Producttype->exists($id)) {
			throw new NotFoundException(__('Invalid producttype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producttype->save($this->request->data)) {
				$this->Session->setFlash(__('The producttype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producttype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producttype.' . $this->Producttype->primaryKey => $id));
			$this->request->data = $this->Producttype->find('first', $options);
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
		$this->Producttype->id = $id;
		if (!$this->Producttype->exists()) {
			throw new NotFoundException(__('Invalid producttype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producttype->delete()) {
			$this->Session->setFlash(__('The producttype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The producttype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
