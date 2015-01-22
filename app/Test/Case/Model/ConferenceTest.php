<?php
App::uses('Conference', 'Model');

/**
 * Conference Test Case
 *
 */
class ConferenceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.conference'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Conference = ClassRegistry::init('Conference');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Conference);

		parent::tearDown();
	}

}
