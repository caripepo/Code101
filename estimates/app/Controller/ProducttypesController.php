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
		$papers = $this->Producttype->Paper->find('list');
		$this->set(compact('papers'));
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
		$papers = $this->Producttype->Paper->find('list');
		$this->set(compact('papers'));
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

    public function estimate() {
		if ($this->request->is('post')) {
            $myrequest = $this->request->data;
            $mypaper = $this->Producttype->fetchpaper($this->request->data['Paper']['Paper'][0]);
            $mysize  = $this->Producttype->fetchsize($this->request->data['Producttype']['Size']);
            $mypaper_cost = $mypaper['Paper']['base_cost'];
            $mysize_width = $mysize['Size']['width'];
            $mysize_height = $mysize['Size']['height'];

//            $surface_area = $mysize_width * $mysize_height;
//            $estimate_price = $surface_area * $mypaper_cost;

            $quantity = $myrequest['Producttype']['Quantity'];

//            $estimate_total = 0.0171 * ( $quantity * $estimate_price ) + 35.73;
            if ($quantity >= 1000 ){
                $estimate_total = 0.0171 * ( $quantity ) + 35.73;
            } else {
                $estimate_total = 0.0189 * ( $quantity ) + 18.49;
            }

            debug($estimate_total);
            debug($myrequest);
            debug($mypaper);
            debug($mysize);
            debug($quantity);die;
            //return $this->redirect(array('action' => 'index'));
        }
		$papers = $this->Producttype->Paper->find('list');
		$this->set(compact('papers'));
        $this->loadModel('Size');
        $sizes = $this->Size->find('list');
		$this->set(compact('sizes'));

    }

}
