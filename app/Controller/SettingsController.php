<?php
App::uses('AppController', 'Controller');
/**
 * Settings Controller
 *
 * @property Setting $Setting
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SettingsController extends AppController {

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

	var $uses = array('Chapter','Conference','Book','Setting','Project','Interest');

/**
 * index method
 *
 * @return void
 */
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('home','publication','research','patent','contact');
	}

	

	public function home(){
		$flag=false; 
		$user = $this->getAuth();
		if ( !empty($user) ){
			$flag = true; 
		}
		$this->set('flag',$flag);
		

		$this->Setting->recursive = 0;
		//$this->debugs($this->Setting->find('all'));
		$this->set('settings', $this->Setting->find('all')[0]);
	}

	public function publication(){
		$this->Book->recursive = 0;
		$this->Conference->recursive = 0;
		$this->Chapter->recursive = 0;
		$this->set('books', $this->Book->find('all'));
		$this->set('conferences', $this->Conference->find('all'));
		$this->set('chapters', $this->Chapter->find('all'));
	}

	public function research(){
		$this->Project->recursive = 0;
		$this->Interest->recursive = 0;
		$this->set('projects', $this->Project->find('all'));
		$this->set('interests', $this->Interest->find('all'));
	}

	public function patent(){
		
	}

	public function contact(){
		$flag=false; 
		$user = $this->getAuth();
		if ( !empty($user) ){
			$flag = true; 
		}
		$this->set('flag',$flag);

		$this->Setting->recursive = 0;
		//$this->debugs($this->Setting->find('all'));
		$this->set('settings', $this->Setting->find('all')[0]);
	}

	public function editContact(){
		if ( !$this->getAuth() ){
			throw new NotFoundException(__('Invalid user'));
		}
		$settings = $this->Setting->find(); 
		//$this->debugs($settings);
		if ( $this->request->is('post')){
			$this->Setting->id = $settings['Setting']['settings_id'];
			$this->Setting->save($this->request->data);
			return $this->redirect(array('action'=>'contact'));
		}
		$this->set('settings',$settings['Setting']);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Setting->exists($id)) {
			throw new NotFoundException(__('Invalid setting'));
		}
		$options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
		$this->set('setting', $this->Setting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Setting->create();
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try saved.'),'flash.error');
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
		if (!$this->Setting->exists($id)) {
			throw new NotFoundException(__('Invalid setting'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try saved.'),'flash.error');
			}
		} else {
			$options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
			$this->request->data = $this->Setting->find('first', $options);
		}
	}

	public function editHome() {

		// if (!$this->Setting->exists($id)) {
		// 	throw new NotFoundException(__('Invalid setting'));
		// }
		if ( !$this->getAuth() ){
			throw new NotFoundException(__('Invalid user'));
		}
		$settings = $this->Setting->find(); 
		//$this->debugs($settings);
		if ( $this->request->is('post')){
			$data = $this->request->data; 
			if ( empty($data['Setting']['settings_photo']['name']) ) {
				unset($data['Setting']['settings_photo']);
			}
			$this->Setting->id = $settings['Setting']['settings_id'];
			$this->Setting->save($data);
			return $this->redirect(array('action'=>'home'));
		}
		$this->set('settings',$settings['Setting']);



		// if ($this->request->is(array('post', 'put'))) {
		// 	if ($this->Setting->save($this->request->data)) {
		// 		$this->Session->setFlash(__('The setting has been saved.'),'flash.success');
		// 		return $this->redirect(array('action' => 'index'));
		// 	} else {
		// 		$this->Session->setFlash(__('The setting could not be saved. Please, try saved.'),'flash.error');
		// 	}
		// } else {
		// 	$options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
		// 	$this->request->data = $this->Setting->find('first', $options);
		// }
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Setting->id = $id;
		if (!$this->Setting->exists()) {
			throw new NotFoundException(__('Invalid setting'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Setting->delete()) {
			$this->Session->setFlash(__('The setting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The setting could not be deleted. Please, try saved.'),'flash.error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
