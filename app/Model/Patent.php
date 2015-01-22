<?php
App::uses('AppModel', 'Model');
/**
 * Patent Model
 *
 */
class Patent extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'patent_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'patent_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
