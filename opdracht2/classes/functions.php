<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 13-09-18
 * Time: 12:54
 */

/**
 * Class functions
 */
class functions
{
    /**
     * @param $values
     * @return array
     */
    public function determineHighestAndLowest($values) {
        // Determining the lowest value.
        sort($values);
        $low = $values[0];

        // Determining the highest value.
        rsort($values);
        $high = $values[0];

        // Adding the values to the array.
        $values = [$low, $high];

        // Returning the array
        return (array) $values;
    }
}