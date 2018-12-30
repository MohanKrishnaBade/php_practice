<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 12/24/18
 * Time: 10:19 PM
 *
 * most reliable  and scalable components that i ever build.
 */

class TestArray
{
    private const TYPE_OPTION = 'option';

    private const TYPE_ID = 'id';

    /**
     * @param array $mergedArrays
     * @return  array
     */
    public function formatArrayAndChangeKeys(array $mergedArrays): array
    {
        foreach ($mergedArrays as $key => $value) {

            $result = [];
            $itemId = null;

            array_walk_recursive($value, function ($va, $k) use ($key, &$result, &$itemId) {

                if ($k === self::TYPE_ID) {
                    $itemId = $va;
                }
                if (strpos($k, self::TYPE_OPTION) !== false) {
                    $k = $itemId . '_' . str_replace(self::TYPE_OPTION, self::TYPE_OPTION . $key, $k);
                } else {
                    $k = $itemId . '_' . self::TYPE_OPTION . $key . $k;
                }
                $result[$k] = $va;
            });

            unset($mergedArrays[$key]);
            $mergedArrays[$key] = $result;
        }

        return $mergedArrays;
    }

    /**
     * @param array $mergedArrays
     * @return  array
     */
    public function separateDataByItem(array $mergedArrays): array
    {
        $finalArray = [];
        $index = null;

        array_walk_recursive($mergedArrays, function ($v2, $k2) use (&$finalArray, &$index) {


            if (is_int($v2) && strpos($k2, self::TYPE_ID) !== false) {
                $index = $v2;
            }
            if ($index) {
                $key = str_replace($index . '_', '', $k2);
                $finalArray[$index][$key] = $v2;
            }
        });

        return $finalArray;
    }

    /**
     * @param array $mergedArrays
     * @param array $finalArray
     * @return array
     */
    public function addkeysToTheArray(array $mergedArrays, array $finalArray): array
    {
        $options = array_keys($mergedArrays);

        array_walk($finalArray, function ($value12, $key) use ($options, &$finalArray) {

            $day = array_filter($options, function ($value) use ($value12) {
                return array_key_exists(self::TYPE_OPTION . $value . self::TYPE_ID, $value12);
            });

            $diff = array_diff($options, $day);

            if (count($diff) >= 1) {
                array_map(function ($value) use (&$value12) {
                    $value12["option{$value}id"] = null;
                    $value12["option{$value}name"] = null;
                    $value12["option{$value}Limit"] = null;
                    $value12["option{$value}LimitType"] = null;
                    $value12["option{$value}Aggregate"] = null;
                    $value12["option{$value}isEndorsement"] = null;
                    $value12["option{$value}isEnhancement"] = null;
                }, $diff);

                $finalArray[$key] = $value12;
            }
        });

        return $finalArray;
    }
}

