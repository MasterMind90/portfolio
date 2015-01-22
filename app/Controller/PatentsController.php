<?php
App::uses('AppController', 'Controller');
/**
 * Patents Controller
 *
 * @property Patent $Patent
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PatentsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Session');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$flag=false; 
		if ( !empty($this->getAuth()) ){
			$flag = true; 
		}
		$this->set('flag',$flag);
		
		$this->Paginator->settings = array('limit' => 150);
		$this->Patent->recursive = 0;
		$this->set('patents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Patent->exists($id)) {
			throw new NotFoundException(__('Invalid patent'));
		}
		$options = array('conditions' => array('Patent.' . $this->Patent->primaryKey => $id));
		$this->set('patent', $this->Patent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patent->create();
			if ($this->Patent->save($this->request->data)) {
				$this->Session->setFlash(__('The patent has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patent could not be saved. Please, try saved.'),'flash.error');
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
		if (!$this->Patent->exists($id)) {
			throw new NotFoundException(__('Invalid patent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Patent->save($this->request->data)) {
				$this->Session->setFlash(__('The patent has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patent could not be saved. Please, try saved.'),'flash.error');
			}
		} else {
			$options = array('conditions' => array('Patent.' . $this->Patent->primaryKey => $id));
			$this->request->data = $this->Patent->find('first', $options);
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
		$this->Patent->id = $id;
		if (!$this->Patent->exists()) {
			throw new NotFoundException(__('Invalid patent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Patent->delete()) {
			$this->Session->setFlash(__('The patent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The patent could not be deleted. Please, try saved.'),'flash.error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
