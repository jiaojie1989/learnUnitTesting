<?php

/*
 * Copyright (C) 2017 SINA Corporation
 *  
 *  
 * 
 * This script is firstly created at 2017-02-13.
 * 
 * To see more infomation,
 *    visit our official website http://app.finance.sina.com.cn/.
 */

namespace App\Foo;

/**
 * Description of Foo
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2017-02-13 11:09 (CST) 
 * @version 0.1
 * @description 
 */
class Foo
{

    protected static $bootTime = null;

    public function __construct()
    {
        self::$bootTime = time();
        sleep(2);
    }

    public function getBootTime()
    {
        return self::$bootTime;
    }

}
