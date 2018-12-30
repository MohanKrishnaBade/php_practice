<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 12/23/18
 * Time: 5:23 PM
 */

echo 'mohan krishna reddy';


$a = true;
$b = true;

if ($a ^ $b) {
    echo 'nothing to print';
} else {
    echo 'else  block';
}

exec('touch syntax.txt');
shell_exec('mkdir mohan');
exec('rm -rf syntax.txt');
shell_exec('rm -r mohan');
exec('touch /Applications/MAMP/htdocs/zend/test.txt');

