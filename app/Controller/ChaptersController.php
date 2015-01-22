<?php
App::uses('AppController', 'Controller');
/**
 * Chapters Controller
 *
 * @property Chapter $Chapter
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ChaptersController extends AppController {

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
		$this->Chapter->recursive = 0;
		$this->set('chapters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Chapter->exists($id)) {
			throw new NotFoundException(__('Invalid chapter'));
		}
		$options = array('conditions' => array('Chapter.' . $this->Chapter->primaryKey => $id));
		$this->set('chapter', $this->Chapter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Chapter->create();
			if ($this->Chapter->save($this->request->data)) {
				$this->Session->setFlash(__('The chapter has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chapter could not be saved. Please, try again.'),'flash.error');
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
		if (!$this->Chapter->exists($id)) {
			throw new NotFoundException(__('Invalid chapter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Chapter->save($this->request->data)) {
				$this->Session->setFlash(__('The chapter has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chapter could not be saved. Please, try again.'),'flash.error');
			}
		} else {
			$options = array('conditions' => array('Chapter.' . $this->Chapter->primaryKey => $id));
			$this->request->data = $this->Chapter->find('first', $options);
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
		$this->Chapter->id = $id;
		if (!$this->Chapter->exists()) {
			throw new NotFoundException(__('Invalid chapter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Chapter->delete()) {
			$this->Session->setFlash(__('The chapter has been deleted.'),'flash.success');
		} else {
			$this->Session->setFlash(__('The chapter could not be deleted. Please, try again.'),'flash.error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
