<?php
App::uses('Pricetier', 'Model');

/**
 * Pricetier Test Case
 *
 */
class PricetierTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pricetier'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pricetier = ClassRegistry::init('Pricetier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pricetier);

		parent::tearDown();
	}

}
