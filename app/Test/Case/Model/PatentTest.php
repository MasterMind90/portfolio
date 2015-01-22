<?php
App::uses('Patent', 'Model');

/**
 * Patent Test Case
 *
 */
class PatentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.patent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Patent = ClassRegistry::init('Patent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Patent);

		parent::tearDown();
	}

}
