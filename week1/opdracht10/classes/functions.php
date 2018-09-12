<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 18:03
 */

/**
 * Class functions
 */
class functions
{
    /**
     * @param int $round1
     * @param int $round2
     * @param int $round3
     * @return array
     */
    public function getTimeValues($round1 = 0, $round2 = 0, $round3 = 0) {
        // Calculating total value
        $totalTime = $round1 + $round2 + $round3;

        // Calculating average value
        $averageTime = ($totalTime) / 3;

        // Adding the values to the array
        $times = ["total" => $totalTime, "average" => round($averageTime, 2)];

        // Returning the array
        return $times;
    }
}