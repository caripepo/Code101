<?php
/**
 * PostageFixture
 *
 */
class PostageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'saturation' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,3', 'unsigned' => false),
		'mixedadc' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,3', 'unsigned' => false),
		'level2' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,3', 'unsigned' => false),
		'level3' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,3', 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'saturation' => 1,
			'mixedadc' => 1,
			'level2' => 1,
			'level3' => 1,
			'created' => '2014-05-27 11:21:57',
			'modified' => '2014-05-27 11:21:57'
		),
	);

}
