<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 3:41 PM
 */

class FilteredUnserialize
{
    public function __construct()
    {
        echo '__construct';
    }

    public function __destruct()
    {
        echo '__destruct';
    }

    public function __toString()
    {
        echo '__toString';
        return '__toString';
    }

    public function __call($name, $arguments)
    {
        echo '__call';
    }

}

$customer = new FilteredUnserialize();
$s = serialize($customer); // triggers: __construct, __destruct

$u = unserialize($s, ['allowed_classes' => true]); // triggers: __destruct
echo get_class($u); // Customer
$u = unserialize($s, ['allowed_classes' => false]); // does not
//trigger anything
echo get_class($u); // __PHP_Incomplete_Class