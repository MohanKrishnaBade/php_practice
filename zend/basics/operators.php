<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 12/23/18
 * Time: 5:49 PM
 */

$c = file_exists('/Applications/MAMP/htdocs/zend/test.txt');
echo $c ? 'file exists' : 'not exists';
echo '<br>';
list($a, $b) = [752, 547];

switch ($a <=> $b) {
    case -1:
        echo 'a < b';
        break;
    case 1:
        echo 'a > b';
        break;
    case 0;
        echo 'a = b';
        break;
    default:
        echo 'something went wrong';
}

//array operators::::--
$arr1 = range(1, 6);
$arr2 = range(4, 17);



var_dump($arr1+$arr2);
