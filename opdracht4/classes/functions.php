<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 22:08
 */

/**
 * Class functions
 */
class functions
{
    /**
     * @return array|bool
     */
    public function getPostValue() {
        // Checking if the user has made a choice.
        if (isset($_POST["fruit-choice"]))
            return $_POST["fruit-choice"];
        // Return in case there no choice made.
        return false;
    }

    /**
     * @param $postValue
     * @return array
     */
    public function switchCases($postValue) {
        // Checking which one of the values has been sent.
        switch ($postValue) {
            case "appel":
                $array = [$postValue, "Een rode appel!"];
                break;
            case "banaan":
                $array = [$postValue, "Een gele banaan!"];
                break;
            case "peer":
                $array = [$postValue, "Een groene peer!"];
                break;
            default:
                $array = ["Unknown", "Er is geen keuze gemaakt!"];
        }

        // Returning the array;
        return $array;
    }
}