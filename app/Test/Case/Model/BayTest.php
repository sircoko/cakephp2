<?php
App::uses('Bay', 'Model');

/**
 * Bay Test Case
 */
class BayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bay',
		'app.regions',
		'app.spot',
		'app.bays'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bay = ClassRegistry::init('Bay');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bay);

		parent::tearDown();
	}

}
