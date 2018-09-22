<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$class = new class
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b)
    {
        return $a + $b;
    }
};


//$class->add(4, 56);


//Level support for the dirname() function

echo dirname('/var/www/html/app/etc/config.php', 2);

//Secure random number generator


//echo  random_int(1, 10);
//echo random_int(PHP_INT_MIN, 500);
//echo  random_int(20, PHP_INT_MAX);
echo  random_int(PHP_INT_MIN, PHP_INT_MAX);
