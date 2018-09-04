<?php

require_once 'MyIterator.php';


function strComparision(string $str1, string $str2)
{
    echo strcmp($str1, $str2);
    echo strlen('mohan krishna reddy');
    echo soundex("mohan");
    echo sprintf("There are %u million bicycles in %s.", [10, 'mohan'], '');

    $string = 'mohan';

    if (strpos($string, 'a')) {
        echo 'string found';
    }
}


/**
 * @throws Exception
 */
function arrayExercise()
{
    $a = range(1, 30);
    $b = array_slice($a, 1, 10);
    array_unshift($b, 12);
    array_pop($b);
    array_shift($b);
    print_r($b);


    array_walk($b, function ($value, $key) {
        echo 'value::' . $value . ' keys::' . $key . "<br>";
    });


    var_dump(array_values($b));

    $object = new ArrayObject([1, 2, 4, 5, 6, 77, 7, 80]);
    $object->append(12);
    $object->asort();
    var_dump($object->count());


    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    $random = new ArrayObject($fruits);
    $random->ksort();
    $iterator = $random->getIterator();

    while ($iterator->valid()) {
        echo ' keys ---' . $iterator->key() . ' values --' . $iterator->current();

        $iterator->next();
    }

    var_dump($random->getIteratorClass());
    $random->setIteratorClass('MyIterator');
    var_dump($random->getIteratorClass());


    $abc = [1, 2, 4, 8];
    $xyz = [0, 2, 4, 6, 8, 10];
    echo count(array_merge(array_diff($abc, $xyz), array_diff($xyz, $abc)));
}


function stringFunction(string $x, string $subString)
{

    $str = str_replace(' ', '', $x);
    $result = strtolower(preg_replace('/[^a-zA-Z]+/', '', $str));

    echo substr_count($result, strtolower($subString));

}

/**
 * @param int $a
 * @param array $b1
 * @param int|null $used
 * @param array $array
 * @param int $times
 */
function jarSolution(int $a, array $b1, int $used = null, array $array = [], int $times = 0)
{
    arsort($b1);

    ++$times;

    if ($times > 0) {
        $i = 0;
        foreach ($b1 as $values) {
            $b[$i] = $values;
            $i++;
        }
    } else {
        $b = $b1;
    }

    $maxValue = max($b);
    if ($maxValue > $a) {
        array_shift($b);
        jarSolution($a, $b);
    } else if ($maxValue < $a) {

        foreach ($b as $value) {
            $used = $used ?? $maxValue;
            $newValue = $used + $value;
            $diff = $a - $newValue;
            if ($a > $newValue && in_array($diff, $b, true)) {

                $position = array_search($value, $b, true);
                $newB = array_slice($b, $position);
                $array[] = $maxValue;
                jarSolution($a, $newB, $newValue, $array, $times);

            } elseif ($a > $newValue) {
                $array[] = $value;
                jarSolution($a, $b, $newValue, $array, $times);

            } elseif ($a === $newValue) {
                $array[] = $maxValue;
                $array[] = $value;
                var_dump($array);
                exit();
            }

        }
    } else {
        echo $maxValue;
    }

}

/**
 * @param array $array
 */
function missingNumber(array $array)
{
    $createArray = range(0, 100);

    var_dump(array_diff($createArray, $array));
}

/**
 * @param array $arr
 */
function duplicateNumber(array $arr)
{
    $array = array_count_values($arr);

    array_walk($array, function ($value, $key) {

        if ($value === 2) {
            echo $key . "<br>";
        }
    });
}

/**
 * @param array $x
 */
function getLargestAndSmallestNumber(array $x)
{
    echo max($x);
    echo min($x);
}

/**
 * @param array $array
 * @param int $givenNumber
 * @param int $i
 */
function getPairs(array $array, int $givenNumber, $i = 0)
{
    $array = array_unique($array);
    $firstElement = $array[$i];
    unset($array[$i]);

    foreach ($array as $value) {
        if ($firstElement + $value === $givenNumber) {
            var_dump([$firstElement, $value]);
        }
    }
    ++$i;
    if (count($array) > 0) {
        getPairs($array, $givenNumber, $i);
    }
}

function removeDuplicates(array $array)
{

    var_dump(array_unique($array));
}

function quick_sort($array)
{
    // find array size
    $length = count($array);

    // base case test, if array of length 0 then just return array to caller
    if ($length <= 1) {
        return $array;
    } else {

        // select an item to act as our pivot point, since list is unsorted first position is easiest
        $pivot = $array[0];

        // declare our two arrays to act as partitions
        $left = $right = array();

        // loop and compare each item in the array to the pivot value, place item in appropriate partition
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $pivot) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }

        // use recursion to now sort the left and right lists
        return array_merge(quick_sort($left), array($pivot), quick_sort($right));
    }
}

function arrayValue(array $array)
{

    $array1 = range(min($array), max($array));

    $new = array_diff($array1, $array);
    print_r(array_shift(array_values($new)));


}


function reverseArray(array $array)
{
    var_dump(array_reverse($array));

}

/**
 * @param array $array
 * @param array $resultArray
 */
function removeDuplicatesWithoutUsingLibrary(array $array, array $resultArray = [])
{
    foreach ($array as $v) {
        if (!check($v, $resultArray)) {
            $resultArray[] = $v;
        }
    }

    var_dump($resultArray);

}

function check(int $int, array $result)
{
    foreach ($result as $value) {
        if ($value === $int) {
            return true;
        }
    }
    return false;

}


function commonElements(array $arr1, array $arr2, array $arr3)
{
    $arr4 = array_intersect($arr1, $arr2);
    var_dump(array_intersect($arr3, $arr4));

}

function firstElementRepeats(array $array): int
{
    for ($i = 0; $i <= count($array); $i++) {
        $value = $array[$i];
        unset($array[$i]);
        if (in_array($value, $array, true)) {
            return $value;
        }
    }
}

function findSmallest($arr, $n)
{

    // Initialize result
    $res = 1;

    for ($i = 0; ($i < $n) && ($arr[$i] <= $res); $i++) {
        $res += $arr[$i];
    }

    return $res;
}

/**
 * @param array $array
 * @param int $sum
 * @return array
 */
function subArrayEqualToZero(array $array, int $sum = 10): array
{

    $firstElement = $needVar = array_shift($array);

    foreach ($array as $value) {
        $newArray[] = $value;
        $firstElement += $value;
        if ($firstElement === $sum) {
            $newArray[] = $needVar;
            var_dump($newArray);
            exit();
        }
    }

    subArrayEqualToZero($array);
}


function getRepeatedValuesInString(string $string)
{
    $implode = str_split($string);
    $uniqie = array_unique($implode);
    $key = array_diff_key($implode, $uniqie);

    $va = substr($string, 1, 1);

    array_map(function ($value) {
        echo $value;
    }, $key);

}

function find_non_repeat($word)
{
    $array = str_split($word);
    foreach ($array as $value) {
        if (substr_count($word, $value) === 1) {
            return $value;
        }
    }
}

/**
 * @param string $string
 * @return string
 */
function stringReverse(string $string)
{
    $array = str_split($string);
    $new = [];
    foreach ($array as $value) {

        array_unshift($new, $value);
    }
    return implode('', $new);

}

function strCheckForDigits(string $string)
{
    echo preg_match('#[0-9]#', $string) ? 'string has digits' : 'no digits found';
}


function vowelsCheck(string $str, int $vowelsCount = 0, int $others = 0)
{
    $arr = str_split(strtoupper($str));

    if (current($arr) === 'Y' || end($arr) === 'Y') {
        ++$vowelsCount;
    }
    foreach ($arr as $value) {
        if (in_array($value, ['A', 'E', 'I', 'O', 'U'])) {
            ++$vowelsCount;
        } elseif ($value !== 'Y') {
            ++$others;
        }
    }

    echo 'vowels --- ' . $vowelsCount . '    others---' . $others;

}


function charOccurrence(string $str, string $char)
{
    echo substr_count(strtolower($str), strtolower($char));
}

function permute($arg)
{
    $array = is_string($arg) ? str_split($arg) : $arg;
    if (1 === count($array)) {
        return $array;
    }
    $result = [];
    foreach ($array as $key => $item) {
        $arr = array_diff_key($array, [$key => $item]);
        foreach (permute($arr) as $p) {
            $result[] = $item . $p;
        }
    }

    return $result;
}


function strRotation(string $str1, string $str2)
{

    if (strtolower($str1) === strrev(strtolower($str2))) {
        echo 'these two strings are a rotation of each other';
    }
}

?>