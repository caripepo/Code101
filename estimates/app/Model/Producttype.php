<?php
App::uses('AppModel', 'Model');
/**
 * Producttype Model
 *
 * @property Paper $Paper
 * @property Paper $Paper
 */
class Producttype extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Paper' => array(
			'className' => 'Paper',
			'foreignKey' => 'producttype_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Paper' => array(
			'className' => 'Paper',
			'joinTable' => 'papers_producttypes',
			'foreignKey' => 'producttype_id',
			'associationForeignKey' => 'paper_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

    public function fetchpaper($id) {
        $db_paper = ClassRegistry::init('Paper');
        $result = $db_paper->findById($id);
        return $result;
    }

    public function fetchsize($id) {
        $db_size = ClassRegistry::init('Size');
        $result = $db_size->findById($id);
        return $result;
    }
}
