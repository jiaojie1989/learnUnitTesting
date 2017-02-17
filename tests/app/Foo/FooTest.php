<?php

namespace App\Foo;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-02-13 at 11:35:47.
 */
class FooTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Foo
     */
    protected $object;

    /**
     * 
     * @var type 
     */
    protected static $v = null;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
//        $this->object = new Foo;
//        self::$v = date("Y-m-d H:i:s");
//        sleep(1);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers App\Foo\Foo::getBootTime
     * @todo   Implement testGetBootTime().
     */
    public function testGetBootTime()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @backupStaticAttributes enabled
     */
    public function testA()
    {
        self::$v = "a";
//        var_dump(self::$v);
        $this->assertTrue(true);
    }

    /**
     * @backupStaticAttributes enabled
     */
    public function testB()
    {
//        var_dump(self::$v);
        $this->assertFalse(false);

        $var = $this->getMockBuilder("FBA")->getMock();
        $var->expects($this->exactly(3))->method("hello");
        
//        var_dump(($var));
    }

    public function testC()
    {
//        $foo = $this->getMockBuilder("Foo")->getMock();
//        $foo->expects($this->once())
//                ->method("bar")
//                ->with(1)
//                ->willReturn(1);
//        $this->assertEquals(1, $foo->bar(1));
        // 为 SomeClass 类创建桩件。
        $stub = $this->getMockBuilder('\\App\\Foo\\Foo')
                ->getMock();
$stub->expects(1)->method("getBootTime");
        // 配置桩件。
//        $stub->method('getBootTime')
//                ->willReturn('foo');
        var_dump(get_parent_class($stub));

        // 现在调用 $stub->doSomething() 将返回 'foo'。
        $this->assertEquals('foo', $stub->getBootTime());
    }

}
