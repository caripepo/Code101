<?php
App::uses('PapersProducttype', 'Model');

/**
 * PapersProducttype Test Case
 *
 */
class PapersProducttypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.papers_producttype',
		'app.paper',
		'app.producttype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PapersProducttype = ClassRegistry::init('PapersProducttype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PapersProducttype);

		parent::tearDown();
	}

}
