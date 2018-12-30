<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 12/23/18
 * Time: 5:59 PM
 */

$i = 90;

while ($i <= 100) {
    echo 'mohan' . $i;
    $i++;
}

do {
    echo 'test' . $i;
    $i++;

} while ($i <= 110);

//continue statement;

foreach (range(1, 10) as $value) {
    if ($value % 2 === 0) {
        continue;
    } else {
        echo $value . '<br>';
    }
}

echo __DIR__;
echo __FILE__;

function nametest()
{
    echo __FUNCTION__;
}
nametest();

echo __LINE__;
echo __NAMESPACE__;