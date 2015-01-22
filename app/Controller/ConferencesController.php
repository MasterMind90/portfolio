<?php
App::uses('AppController', 'Controller');
/**
 * Conferences Controller
 *
 * @property Conference $Conference
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ConferencesController extends AppController {

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
	public function beforeFilter(){
		parent::beforeFilter();

		$this->Auth->allow('index');
	}
	
	public function index() {
		$flag=false; 
		if ( !empty($this->getAuth()) ){
			$flag = true; 
		}
		$this->set('flag',$flag);
		
		$this->Paginator->settings = array('limit' => 150);
		$this->Conference->recursive = 0;
		$this->set('conferences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Conference->exists($id)) {
			throw new NotFoundException(__('Invalid conference'));
		}
		$options = array('conditions' => array('Conference.' . $this->Conference->primaryKey => $id));
		$this->set('conference', $this->Conference->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Conference->create();
			if ($this->Conference->save($this->request->data)) {
				$this->Session->setFlash(__('The conference has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conference could not be saved. Please, try again.'),'flash.error');
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
		if (!$this->Conference->exists($id)) {
			throw new NotFoundException(__('Invalid conference'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Conference->save($this->request->data)) {
				$this->Session->setFlash(__('The conference has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conference could not be saved. Please, try again.'),'flash.error');
			}
		} else {
			$options = array('conditions' => array('Conference.' . $this->Conference->primaryKey => $id));
			$this->request->data = $this->Conference->find('first', $options);
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
		$this->Conference->id = $id;
		if (!$this->Conference->exists()) {
			throw new NotFoundException(__('Invalid conference'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Conference->delete()) {
			$this->Session->setFlash(__('The conference has been deleted.'),'flash.success');
		} else {
			$this->Session->setFlash(__('The conference could not be deleted. Please, try again.'),'flash.error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
