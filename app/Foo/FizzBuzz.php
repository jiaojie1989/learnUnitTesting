<?php

/*
 * Copyright (C) 2017 SINA Corporation
 *  
 *  
 * 
 * This script is firstly created at 2017-02-20.
 * 
 * To see more infomation,
 *    visit our official website http://app.finance.sina.com.cn/.
 */

namespace App\Foo;

use InvalidArgumentException;

/**
 * Description of FizzBuzz
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2017-02-20 14:41 (CST) 
 * @version 0.1
 * @description 
 */
class FizzBuzz
{

    public function check($input)
    {
        if (is_numeric($input)) {
            if ($input % 3 === 0 && $input % 5 === 0) {
                return "FizzBuzz";
            } elseif ($input % 3 === 0 && $input % 5 !== 0) {
                return "Fizz";
            } elseif ($input % 3 !== 0 && $input % 5 === 0) {
                return "Buzz";
            } else {
                return $input;
            }
        } else {
            throw new InvalidArgumentException("Expect a number while put '{$input}' in.");
        }
    }

}
