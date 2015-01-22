<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

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

	public function beforeFilter(){
		parent::beforeFilter();
		//$this->Auth->allow('logout');
	}

	public function login(){
		$this->layout = 'loginLayout';
		if ($this->request->is('post')){
			if ($this->Auth->login()){
				return $this->redirect(array('controller'=>'settings', 'action'=>'home'));
			}
			$this->Session->setFlash(__('Invalid username or password, try again'),'flash.error');
		}
	}

	public function logout(){
		$this->Auth->logout();
		return $this->redirect(array('controller'=>'settings', 'action'=>'home'));
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		//$this->debugs($this->getAuth());
		
		if ( !empty($this->getAuth()) && $this->getAuth()['role'] == 'admin' ){
			$this->Paginator->settings = array('limit' => 150);
			$this->User->recursive = 0;
			$this->set('users', $this->Paginator->paginate());
		}
		else return $this->redirect(array('controller'=>'settings','action'=>'home'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try saved.'),'flash.error');
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
		if ( !empty($this->getAuth()) && $this->getAuth()['role'] == 'admin' ){
			if (!$this->User->exists($id)) {
				throw new NotFoundException(__('Invalid user'));
			}
			if ($this->request->is(array('post', 'put'))) {
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been saved.'),'flash.success');
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try saved.'),'flash.error');
				}
			} else {
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->request->data = $this->User->find('first', $options);
			}
		}
		else return $this->redirect(array('controller'=>'settings','action'=>'home'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if ( !empty($this->getAuth()) && $this->getAuth()['role'] == 'admin' ){
			$this->User->id = $id;
			if (!$this->User->exists()) {
				throw new NotFoundException(__('Invalid user'));
			}
			$this->request->onlyAllow('post', 'delete');
			if ($this->User->delete()) {
				$this->Session->setFlash(__('The user has been deleted.'));
			} else {
				$this->Session->setFlash(__('The user could not be deleted. Please, try saved.'),'flash.error');
			}
			return $this->redirect(array('action' => 'index'));
		}
		else return $this->redirect(array('controller'=>'settings','action'=>'home'));
	}


}
