<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 16:43
 */

/**
 * Class functions
 */
class functions {
    /**
     * @var int
     */
    private $five = 5;

    /**
     * @return int
     */
    public function addingOneFirst() {
        // Getting the global variable.
        $five = $this->five;

        // Adding 1 by the value of 5.
        $five++;

        // Returning the new number.
        return $five;
    }

    /**
     * @return int
     */
    public function addingOneSecond() {
        // Getting the global variable.
        $five = $this->five;

        //Returning 5 + 1.
        return ++$five;
    }

    /**
     * @return int
     */
    public function addingOneThird() {
        // Getting the global variable.
        $five = $this->five;

        //Returning 5 + 1.
        return $five + 1;
    }
}