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
        if (isset($_POST["table-choice"]))
            return $_POST["table-choice"];

        // Return in case there no choice made.
        return false;
    }
}