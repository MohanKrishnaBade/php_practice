<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/29/18
 * Time: 11:54 PM
 */

class AllStringFunctions
{
    /**
     * convert a string into an array
     * @param string $string
     * @return array
     */
    public function explode(string $string): array
    {

        return explode(' ', $string);
    }

    /**
     * @param string $string
     */
    public function fprintf(string $string): void
    {
        $file = fopen('./string.txt', 'w');
        fprintf($file, "With 2 decimals: %1\$.2f\nWith no decimals: %1\$u", $string);
    }

    /**
     * @param string $str1
     * @param string $str2
     * @return string
     */
    public function levenshtein(string $str1, string $str2): string
    {
        return levenshtein($str1, $str2);
    }

    /**
     * @return string
     */
    public function strcasecmp():string
    {
        $var1 = "Hello";
        $var2 = "hello";
        if (strcasecmp($var1, $var2) === 0) {
            return '$var1 is equal to $var2 in a case-insensitive string comparison';
        }
    }


}

$p = new AllStringFunctions();
var_dump($p->explode('mohan krishna reddy'));
$p->fprintf('123');
$p->levenshtein("mohan", 'moan');
$p->strcasecmp();