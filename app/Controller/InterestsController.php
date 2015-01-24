<?php
App::uses('AppController', 'Controller');
/**
 * Interests Controller
 *
 * @property Interest $Interest
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InterestsController extends AppController {

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
		$user = $this->getAuth();
		if ( !empty($user) ){
			$flag = true; 
		}
		$this->set('flag',$flag);
		
		$this->Paginator->settings = array('limit' => 150);
		$this->Interest->recursive = 0;
		$this->set('interests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Interest->exists($id)) {
			throw new NotFoundException(__('Invalid interest'));
		}
		$options = array('conditions' => array('Interest.' . $this->Interest->primaryKey => $id));
		$this->set('interest', $this->Interest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Interest->create();
			if ($this->Interest->save($this->request->data)) {
				$this->Session->setFlash(__('The interest has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interest could not be saved. Please, try saved.'),'flash.error');
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
		if (!$this->Interest->exists($id)) {
			throw new NotFoundException(__('Invalid interest'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interest->save($this->request->data)) {
				$this->Session->setFlash(__('The interest has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interest could not be saved. Please, try saved.'),'flash.error');
			}
		} else {
			$options = array('conditions' => array('Interest.' . $this->Interest->primaryKey => $id));
			$this->request->data = $this->Interest->find('first', $options);
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
		$this->Interest->id = $id;
		if (!$this->Interest->exists()) {
			throw new NotFoundException(__('Invalid interest'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Interest->delete()) {
			$this->Session->setFlash(__('The interest has been deleted.'));
		} else {
			$this->Session->setFlash(__('The interest could not be deleted. Please, try saved.'),'flash.error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
