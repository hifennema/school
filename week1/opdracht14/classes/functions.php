<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 18:50
 */

/**
 * Class functions
 */
class functions
{
    /**
     * @return array
     */
    public function retrievePostValues() {
        // Declaring variable
        $fruitChoice = false;

        // Checking if the choice has been made.
        if (isset($_POST["fruit-choice"]))
            $fruitChoice = $_POST["fruit-choice"];

        // Combining the values in an array
        $postValues = ["fruit-choice" => $fruitChoice];

        // Returning the choice.
        return (array) $postValues;
    }
}