<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/30/18
 * Time: 12:33 PM
 */


//function odd_number ($x)
//{
//    echo "$x is odd";
//}
//function even_number ($x)
//{
//    echo "$x is even";
//}
//$n = 15;
//$a = (($n % 2) ? 'odd_number' : 'even_number');
//$a($n);
//$a = 1;
//$a=  $a— + 1; echo $a;
//
//$fileInfo =  fstat('./string.txt');
//
//class a {
//     private $c;
//    function a ($pass) {
//        $this->c = $pass; }
//    function print_data() {
//        echo $this->c; }
//}
//$a = new a(10); $a->print_data();
//

//$array = glob('/Applications/MAMP/htdocs/php_practice/test/test*.xml');
//
//array_map('unlink', glob('/Applications/MAMP/htdocs/php_practice/test/te*.xml'));
//
//$output = `date`;
//echo "Current date of your system: $output";


$array = [
    1,
    2,
    4,
    [5, 7, 8],
    [67, 90],
    [2, 5, 8],
    [
        1,
        [2, 4, 7],
        [8, 0],
        0
    ],
    [
        [
            [
                [
                    [
                        [
                            [
                                [
                                    [21124,325264],
                                    189563,26457,37568,47568675
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

function flattenArray(array $array, &$return = [])
{
    array_walk_recursive($array, function ($a) use (&$return) {
        $return[] = $a;
    });

    var_dump($return);
//    foreach ($array as $value) {
//
//        if (is_array($value)) {
//
//            flattenArray($value, $arrayData);
//
//        } else {
//            $arrayData[] = $value;
//        }
//    }

   // var_dump($arrayData);
}

flattenArray($array);