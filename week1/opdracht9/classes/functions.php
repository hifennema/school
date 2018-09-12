<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 17:56
 */

/**
 * Class functions
 */
class functions
{
    /**
     * @param $array
     * @return string
     */
    public function buildStringValuesHighToLow($array) {
        // Declaring string
        $string = "";

        // Sorting the array values from high to low.
        rsort($array);


        // Building the string.
        foreach ($array as $item) {
            $string = $string . $item . ", ";
        }

        // Trimming the string.
        $string = trim($string, ", ");

        // Returning the string.
        return $string;
    }
}