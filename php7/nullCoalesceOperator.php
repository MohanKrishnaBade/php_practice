<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 3:23 PM
 */

/**
 * Class nullCoalesceoperator
 */
class nullCoalesceOperator
{

    public function nullCheck()
    {
        $A = null; // or not set
        $B = null;
        echo $A ?? 20; // 20
        echo $A ?? $B ?? 30; // 10
    }

}

$obj=  new nullCoalesceOperator();
$obj->nullCheck();