<?php
App::uses('Postage', 'Model');

/**
 * Postage Test Case
 *
 */
class PostageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.postage'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Postage = ClassRegistry::init('Postage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Postage);

		parent::tearDown();
	}

}
