<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 12/23/18
 * Time: 6:25 PM
 */

//quotes //
$a = 'something needs to be inserted';
echo 'single quotes';
echo "double  $a quotes";

echo strpos('mohan', 'oh');

$str1 = 'some raNDOM string';
$str2 = 's0me random STARING';

echo strcasecmp($str2, $str1);

echo similar_text($str1, $str2);

$var = 0;
$str = 'aabbccddeeaabbccdd';

echo str_replace('a', 'z', $str, $var);

echo strcasecmp(12345, '12345');


if (strpos($str, 'c')) {
    echo 'string found';
} else {
    echo 'not found';
}

 $p =  printf('%.1f', 7.1345);


echo $p;