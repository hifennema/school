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
     * @return bool
     */
    public function getPostValue() {
        // Checking if the user has made a choice.
        if (isset($_POST["fruit-choice"]))
            return [$_POST["fruit-choice"], "hoi"];
        // Return in case there no choice made.
        return false;
    }
}