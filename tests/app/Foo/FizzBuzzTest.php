<?php

namespace App\Foo;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-02-20 at 14:52:19.
 */
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var FizzBuzz
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new FizzBuzz;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        unset($this->object);
    }

    public function fizzBuzzProvider()
    {
        return [
            [14, 14],
            [3, 'Fizz'],
            [5, 'Buzz'],
            [15, 'FizzBuzz'],
        ];
    }

    /**
     * @covers App\Foo\FizzBuzz::check
     * @todo   Implement testCheck().
     * @dataProvider fizzBuzzProvider
     */
    public function testCheck($input, $expected)
    {
        $this->assertEquals($expected, $this->object->check($input));
    }

    /**
     * @covers \App\Foo\FizzBuzz::check
     */
    public function testGetFizz()
    {
        $input = 3;
        $actual = $this->object->check($input);
        $expected = "Fizz";
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers \App\Foo\FizzBuzz::check
     */
    public function testGetBuzz()
    {
        $input = 5;
        $actual = $this->object->check($input);
        $expected = "Buzz";
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers \App\Foo\FizzBuzz::check
     */
    public function testGetFizzBuzz()
    {
        $input = 15;
        $actual = $this->object->check($input);
        $expected = "FizzBuzz";
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers \App\Foo\FizzBuzz::check
     */
    public function testGetPassThru()
    {
        $input = 14;
        $actual = $this->object->check($input);
        $expected = "14";
        $this->assertEquals($expected, $actual);
    }

}
