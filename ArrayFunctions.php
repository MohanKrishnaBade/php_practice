<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/8/18
 * Time: 1:52 PM
 */

/**
 * Class ArrayFunctions
 */
class ArrayFunctions
{
    public function add(array $array)
    {
        echo array_reduce($array, function ($carry, $item) {

            return $carry + $item;

        });

    }

    /**
     * @param array $array
     */
    public function getLargestNumber(array $array)
    {
        echo array_reduce($array, function ($carry, $item) {

            return $item > $carry ? $item : $carry;

        });

    }

    /**
     * @param array $array
     * @param string $piece
     */
    public function arrayToString(array $array, string $piece)
    {
        echo array_reduce($array, function ($carry, $item) use ($piece) {

            return !$carry ? $item : $carry . $piece . $item;

        });
    }

    /**
     * @param array $array
     * @param int $format
     * @return array
     */
    public function keyCaseChange(array $array, int $format = CASE_UPPER): array
    {
        return array_change_key_case($array, $format);

    }

    /**
     * @param array $array
     * @return array
     */
    public function removeEmptyValuesInAnArray(array $array): array
    {
        return array_filter($array, function ($value) {

            return $value ? $value % 2 === 0 : '';

        }, ARRAY_FILTER_USE_BOTH);

    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    public static function compare($a, $b): int
    {
        if ($a === $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }

    /**
     * @param array $arr1
     * @param array $arr2
     * @return  array
     */
    public function whiteListArrayKeys(array $arr1, array $arr2): array
    {
        return array_intersect_key($arr1, array_flip($arr2));

    }

}

$array = [1, 2, 3, 50, 6, 7, 8, null, '', 89];
$array2 = [1, 4, 6, 87, 8];
$array3 = [1, 4, 6, 9, 8];
$array4 = [1, 8, 6, 87, 8];

$multidimensionalArray =
    [
        ['foo', 'bar'],
        ['fizz', 'buzz'],
    ];


if ($array4):
    echo "mohn";
endif;

$associativeArrayKeys = array_merge(array_column($multidimensionalArray, 0), array_column($multidimensionalArray, 1));
var_dump($associativeArrayKeys);


(function ($value) {
    echo $value;
})('mohan');


$email = 'mohanKrishna@example.com';
list($user, $domain) = explode('@', $email);

echo $user;
$classInstantiation = new ArrayFunctions();
$classInstantiation->add($array);
$classInstantiation->getLargestNumber($array);
$classInstantiation->arrayToString($array, '+');
$classInstantiation->keyCaseChange($array);
var_dump($classInstantiation->whiteListArrayKeys($array, [3, 4, 8]));
var_dump(array_merge($array, $array2, $array3, $array4));