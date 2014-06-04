<?php
/**
 * SizeFixture
 *
 */
class SizeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'height' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'width' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'setup' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '6,2', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
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
			'product_id' => 1,
			'height' => 1,
			'width' => 1,
			'setup' => ''
		),
	);

}
