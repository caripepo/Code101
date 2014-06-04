<?php
App::uses('AppModel', 'Model');
/**
 * Producttype Model
 *
 */
class producttype extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'producttypes';

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



    public function fetchall() {
        $myarray = array();
        $db_color = ClassRegistry::init('Colors');
        $db_paper = ClassRegistry::init('Papers');
        $db_postage = ClassRegistry::init('Postages');
        $db_tier = ClassRegistry::init('Pricetiers');
        $db_size = ClassRegistry::init('Sizes');

        $conditions = array();

        $myarray['color'] = $db_color->find('list', array('conditions' => $conditions));
        $myarray['paper'] = $db_paper->find('list', array('conditions' => $conditions));
        $myarray['postage'] = $db_postage->find('list', array('conditions' => $conditions));
        $myarray['tier'] = $db_tier->find('list', array('conditions' => $conditions));
        $myarray['size'] = $db_size->find('list', array('conditions' => $conditions));
//        debug($myarray);die;
//        debug($color);debug($paper);debug($postage);debug($tier);debug($size);die;
        return $myarray;
    }
}
