<?php
App::uses('AppModel', 'Model');
/**
 * Media Model
 *
 * @property Folder $Folder
 */
class Media extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'medias';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'media_path';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'media_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'media_path' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'The file upload failed',
				'allowEmpty' => TRUE,
			),
			// 'mimeType' => array(
			// 	'rule' => array('mimeType',array('application/msword','application/pdf','application/vnd.openxmlformats-officedocument.wordprocessingml.document')),
			// 	'message' => 'Please only upload (doc,docx,pdf).',
			// 	'allowEmpty' => TRUE
			// ),
			// 'fileSize' => array(
			// 	'rule' => array('fileSize', '<=', '2MB'),
			// 	'message' => 'Image should be less than 1 MB. ',
			// 	'allowEmpty' => TRUE,
			// ),
			'processUpload' => array(
				'rule' => 'processUpload',
				'message' => 'Unable to process upload.',
				'allowEmpty' => TRUE,
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Folder' => array(
			'className' => 'Folder',
			'foreignKey' => 'folder_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function processUpload($check = array()){
		if ( !is_uploaded_file($check['media_path']['tmp_name'])){
			return FALSE; 
		}
		if ( !move_uploaded_file($check['media_path']['tmp_name'], WWW_ROOT. 'img' . DS . 'uploads' . DS . 'images' . DS . $check['media_path']['name'])) {
			return FALSE;
		}
		//$ext = pathinfo($check['student_photo']['name'], PATHINFO_EXTENSION);

		$this->data[$this->alias]['media_path'] =  'uploads/images/'.$check['media_path']['name']; 

		return TRUE;
	}
}
