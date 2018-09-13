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

    /**
     * @param $values
     * @return string
     */
    public function sortValues($values) {
        // Declaring variable
        $string = "";
        sort($values);
        // Building string
        foreach ($values as $value) {
            $string = $string . $value . ", ";
        }

        // Trimming string
        $string = trim($string, ", ");

        // Returning string
        return $string;
    }

    /**
     * @param $values
     * @return float
     */
    public function average($values) {
        // Declaring value
        $total = 0;

        // Calculating the total value.
        for ($i = 0; $i < count($values); $i++) {
            $total = $total + $values[$i];
        }

        // Returning average value
        return round($total / count($values));
    }
}