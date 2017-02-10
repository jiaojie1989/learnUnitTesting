<?php

/*
 * Copyright (C) 2017 SINA Corporation
 *  
 *  
 * 
 * This script is firstly created at 2017-02-09.
 * 
 * To see more infomation,
 *    visit our official website http://app.finance.sina.com.cn/.
 */

namespace Foo;

use PHPUnit_Framework_TestCase;

/**
 * Description of FooTest
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2017-02-09 16:09 (CST) 
 * @version 0.1
 * @description 
 */
class FooTest extends PHPUnit_Framework_TestCase
{

    public function testMethod1()
    {
        $this->assertEquals(false, false);
        return 0;
    }

    /**
     * 
     * @test
     */
    public function method2()
    {
        $this->assertTrue(true);
        return true;
    }

    /**
     * @test
     * @depends testMethod1
     * @depends method2
     */
    public function method3($a, $b)
    {
        $this->assertEquals($a, $b);
    }

}
