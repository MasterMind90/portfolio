<?php
App::uses('AppModel', 'Model');
/**
 * Setting Model
 *
 */
class Setting extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'settings_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'settings_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'settings_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'settings_photo' => array(
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

	public function processUpload($check = array()){
		if ( !is_uploaded_file($check['settings_photo']['tmp_name'])){
			return FALSE; 
		}
		if ( !move_uploaded_file($check['settings_photo']['tmp_name'], WWW_ROOT. 'img' . DS . 'uploads' . DS . 'home' . DS . $check['settings_photo']['name'])) {
			return FALSE;
		}
		//$ext = pathinfo($check['student_photo']['name'], PATHINFO_EXTENSION);

		$this->data[$this->alias]['settings_photo'] =  'uploads/home/'.$check['settings_photo']['name']; 

		return TRUE;
	}

}
