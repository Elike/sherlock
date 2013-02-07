<?php
namespace sherlock\tests\components\queries\Term;

use sherlock\components\queries\Term;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-07 at 03:12:53.
 */
class TermTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Term
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Term;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * @covers sherlock\components\queries\Term::term
	 * @covers sherlock\components\queries\Term::field
	 * @covers sherlock\components\queries\Term::boost
	 */
	public function testValues()
	{
		$ret = $this->object->term("term");
		$this->assertInstanceOf('sherlock\components\queries\Term', $ret);

		$ret = $ret->field("field");
		$this->assertInstanceOf('sherlock\components\queries\Term', $ret);

		$ret = $ret->boost("boost");
		$this->assertInstanceOf('sherlock\components\queries\Term', $ret);

		//Chaining now
		$ret = $this->object->term("term")->field("field")->boost("boost");
		$this->assertInstanceOf('sherlock\components\queries\Term', $ret);

	}

	/**
	 * @covers sherlock\components\queries\Term::build
	 */
	public function testBuild()
	{
		$ret = $this->object->term("term")->field("field");
		$this->assertInstanceOf('sherlock\components\queries\Term', $ret);

		$final = $ret->build();
		$expectedFinal = array("term" =>
							array("field" =>
								array("value" => "term",
									"boost" => 1
								)
							)
						);
		$this->assertEquals($expectedFinal,$final);
	}

	/**
	 * @covers sherlock\components\queries\Term::build
	 */
	public function testBuildExceptions()
	{
		//omit term
		$ret = $this->object->field("field")->boost("boost");
		$this->assertInstanceOf('sherlock\components\queries\Term', $ret);

		$this->setExpectedException('RuntimeException');
		$final = $ret->build();

		//omit field
		$ret = $this->object->field("term")->boost("boost");
		$this->assertInstanceOf('sherlock\components\queries\Term', $ret);

		$this->setExpectedException('RuntimeException');
		$final = $ret->build();

	}



}


?>