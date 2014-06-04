<?php
App::uses('AppModel', 'Model');
/**
 * PapersProducttype Model
 *
 * @property Paper $Paper
 * @property Producttype $Producttype
 */
class PapersProducttype extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'paper_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'producttype_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
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
		'Paper' => array(
			'className' => 'Paper',
			'foreignKey' => 'paper_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Producttype' => array(
			'className' => 'Producttype',
			'foreignKey' => 'producttype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
