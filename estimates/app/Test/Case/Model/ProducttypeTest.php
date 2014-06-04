<?php
App::uses('Producttype', 'Model');

/**
 * Producttype Test Case
 *
 */
class ProducttypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.producttype',
		'app.paper',
		'app.papers_producttype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Producttype = ClassRegistry::init('Producttype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Producttype);

		parent::tearDown();
	}

}
