<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 3:04 PM
 */

class ClosureCall
{
    private $firstname;
    private $lastname;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

}

$obj = new ClosureCall('mohan', 'bade');

$greeting = function ($message) {
    return "$message $this->firstname $this->lastname!";
};

echo $greeting->call($obj, 'Hello');