<?php

require_once 'TestArray.php';
//var_dump(array_slice(range(1, 5), -4, -2));
//
////array iteration
//
//
//$people = ['Tim', 'jon', 'erick'];
//$foods = ['chicken', 'beef', 'slurm'];
//$something = ['mohan', 'gopi', 'somu'];
//
//array_map(function ($v1, $v2, $v3) {
//    echo $v1 . 'eats' . $v2 . $v3 . '<br>';
//}, $people, $foods, $something);
//
//foreach (array_combine($people, $foods) as $key => $value) {
//    echo $key . 'eats' . $value . '<br>';
//}

$option1[1] = [
    [
        'id' => 1,
        'name' => 'item1',
        'optionLimit' => '245215',
        'optionLimitType' => '3465',
        'optionAggregate' => 1335,
        'isEndorsement' => true,
        'isEnhancement' => false,
    ]
];
$option2[2] = [
    [
        'id' => 10,
        'name' => 'item1',
        'optionLimit' => '245215',
        'optionLimitType' => '3465',
        'optionAggregate' => 1335,
        'isEndorsement' => true,
        'isEnhancement' => false,
    ],
    [
        'id' => 47,
        'name' => 'item1',
        'optionLimit' => '245215',
        'optionLimitType' => '3465',
        'optionAggregate' => 1335,
        'isEndorsement' => true,
        'isEnhancement' => false,
    ],
    [
        'id' => 48,
        'name' => 'item1',
        'optionLimit' => '245215',
        'optionLimitType' => '3465',
        'optionAggregate' => 1335,
        'isEndorsement' => true,
        'isEnhancement' => false,
    ],
    [
        'id' => 4,
        'name' => 'item1',
        'optionLimit' => '245215',
        'optionLimitType' => '3465',
        'optionAggregate' => 1335,
        'isEndorsement' => true,
        'isEnhancement' => false,
    ],
    [
        'id' => 7,
        'name' => 'item1',
        'optionLimit' => '245215',
        'optionLimitType' => '3465',
        'optionAggregate' => 1335,
        'isEndorsement' => true,
        'isEnhancement' => false,
    ]
];
$option3[3] = [
    [
        'id' => 10,
        'name' => 'item1',
        'optionLimit' => '245215',
        'optionLimitType' => '3465',
        'optionAggregate' => 1335,
        'isEndorsement' => true,
        'isEnhancement' => false,
    ],
    [
        'id' => 70,
        'name' => 'item1',
        'optionLimit' => '245215',
        'optionLimitType' => '3465',
        'optionAggregate' => 1335,
        'isEndorsement' => true,
        'isEnhancement' => false,
    ]
];
$option5[5] =
    [
        [
            'id' => 44,
            'name' => 'item5',
            'optionLimit' => '24236',
            'optionLimitType' => '3909',
            'optionAggregate' => 1335,
            'isEndorsement' => true,
            'isEnhancement' => false,
        ]
    ];

$mergedArrays = $option1 + $option2 + $option5 + $option3;


$class = new TestArray();
$mergedArrays = $class->formatArrayAndChangeKeys($mergedArrays);
$finalResult = $class->separateDataByItem($mergedArrays);
$finalResult = $class->addkeysToTheArray($mergedArrays, $finalResult);

//
//foreach ($mergedArrays as $key => $value) {
//    $result = [];
//    $itemId = null;
//    array_walk_recursive($value, function ($va, $k) use ($key, &$result, &$itemId) {
//
//        if ($k === 'id') {
//            $itemId = $va;
//        }
//        if (strpos($k, 'option') !== false) {
//            $k = $itemId . '_' . str_replace('option', 'option' . $key, $k);
//        } else {
//            $k = $itemId . '_' . 'option' . $key . $k;
//        }
//        $result[$k] = $va;
//    });
//    unset($mergedArrays[$key]);
//    $mergedArrays[$key] = $result;
//}
//
//$finalArray = [];
//$index = null;
//
//array_walk_recursive($mergedArrays, function ($v2, $k2) use (&$finalArray, &$index) {
//
//
//    if (is_int($v2) && strpos($k2, 'id') !== false) {
//        $index = $v2;
//    }
//    if ($index) {
//        $key = str_replace($index . '_', '', $k2);
//        $finalArray[$index][$key] = $v2;
//    }
//});
//
//
//$options = array_keys($mergedArrays);
//
//array_walk($finalArray, function ($value12, $key) use ($options, &$finalArray) {
//
//    $day = array_filter($options, function ($value) use ($value12) {
//        return array_key_exists('option' . $value . 'id', $value12);
//    });
//
//    $diff = array_diff($options, $day);
//
//    if (count($diff) >= 1) {
//        array_map(function ($value) use (&$value12) {
//            $value12["option{$value}id"] = null;
//            $value12["option{$value}name"] = null;
//            $value12["option{$value}Limit"] = null;
//            $value12["option{$value}LimitType"] = null;
//            $value12["option{$value}Aggregate"] = null;
//            $value12["option{$value}isEndorsement"] = null;
//            $value12["option{$value}isEnhancement"] = null;
//        }, $diff);
//
//        $finalArray[$key] = $value12;
//    }
//});

var_dump($finalResult);

