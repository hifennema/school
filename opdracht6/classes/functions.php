<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 17:08
 */

/**
 * Class functions
 */
class functions
{
    /**
     * @param $number
     * @param $multiplier
     * @return float|int
     */
    private function multiply($number, $multiplier) {
        // Calculating and returning the values.
        return $number * $multiplier;
    }

    /**
     * @param int $myNumber
     * @return array
     */
    public function calculateValues($myNumber = 0) {
        // Calculating the numbers.
        $absoluteNumber = abs($myNumber);
        $multipliedNumber = $this->multiply($absoluteNumber, 4);
        $squaredNumber = sqrt($multipliedNumber);
        $roundedNumber = ceil($squaredNumber);

        // Adding the values to the array "numbers".
        $numbers = ["absolute" => $absoluteNumber, "multiplied" => $multipliedNumber, "squared" => $squaredNumber, "rounded" => $roundedNumber];

        // Returning the array.
        return (array) $numbers;
    }
}