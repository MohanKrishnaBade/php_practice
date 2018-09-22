<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 3:07 PM
 */

class GeneratorDelegation
{
    private function gen1()
    {
        yield '1';
        yield '2';
        yield '3';
    }

    public function gen2()
    {
        yield '4';
        yield '5';
        yield '6';

        return 'gen-return';
    }

    public function gen3()
    {
        yield ['7', 6, 7, 9, 9];
        yield '8';
        yield from $this->gen1();
        yield '9';
        yield from $this->gen2();
        yield '10';
    }

}

$obj = new GeneratorDelegation();

foreach ($obj->gen3() as $value) {


    if (is_array($value)) {
        foreach ($value as $v) {
            echo $v;
        }
    } else{
        echo $value;
    }

}

var_dump($obj->gen2()->getReturn());
