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
	public function index($id) {
		$flag=false; 
		if ( !empty($this->getAuth()) ){
			$flag = true; 
		}
		$this->set('flag',$flag);

		$this->Media->recursive = 0;
		$photos = $this->Media->find('all',array('conditions'=>array('Media.group_id'=>$id)));
		$this->debugs($photos);
		$this->debugs($this->Paginator->paginate());
		$this->set('medias', $photos);
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
	public function add() {
		if ($this->request->is('post')) {
			$this->Media->create();
			if ($this->Media->save($this->request->data)) {
				$this->Session->setFlash(__('The media has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Media->Group->find('list');
		$this->set(compact('groups'));
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
			$this->Session->setFlash(__('The media has been deleted.'));
		} else {
			$this->Session->setFlash(__('The media could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
