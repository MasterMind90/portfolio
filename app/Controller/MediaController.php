<?php
App::uses('AppController', 'Controller');
/**
 * Media Controller
 *
 * @property Media $Media
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MediaController extends AppController {

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

	public function index($id) {
		$flag=false; 
		if ( !empty($this->getAuth()) ){
			$flag = true; 
		}
		$this->set('flag',$flag);

		$this->Media->recursive = -1;
		$photos = $this->Media->find('all',array('conditions'=>array('Media.group_id'=>$id)));
		//$this->debugs($photos);


		$group = $this->Media->Group->find('first',array('conditions'=>array('Group.id'=>$id),'fields'=>'group_name'));
		$group = $group['Group'];
		//$this->debugs($group);


		
		$this->set('medias', $photos);
		$this->set('group', $group);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Media->exists($id)) {
			throw new NotFoundException(__('Invalid media'));
		}
		$options = array('conditions' => array('Media.' . $this->Media->primaryKey => $id));
		$this->set('media', $this->Media->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id) {
		if ($this->request->is('post')) {
			$data = $this->request->data;

			$this->Media->create();
			if ($this->Media->save($this->request->data)) {
				$this->Session->setFlash(__('The media has been saved.'),'flash.success');
				return $this->redirect(array('action' => 'index',$data['Media']['group_id']));
			} else {
				$this->Session->setFlash(__('The media could not be saved. Please, try again.'),'flash.error');
			}
		}

		$this->set('id',$id);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Media->exists($id)) {
			throw new NotFoundException(__('Invalid media'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Media->save($this->request->data)) {
				$this->Session->setFlash(__('The media has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Media.' . $this->Media->primaryKey => $id));
			$this->request->data = $this->Media->find('first', $options);
		}
		$groups = $this->Media->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Media->id = $id;
		if (!$this->Media->exists()) {
			throw new NotFoundException(__('Invalid media'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Media->delete()) {
			$this->Session->setFlash(__('The media has been deleted.'),'flash.success');
		} else {
			$this->Session->setFlash(__('The media could not be deleted. Please, try again.'),'flash.error');
		}
		return $this->redirect($this->referer());
	}
}
