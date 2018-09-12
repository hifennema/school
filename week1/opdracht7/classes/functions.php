<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 17:22
 */

/**
 * Class functions
 */
class functions
{
    /**
     * @param $text
     * @return array
     */
    public function alterText($text) {
        // Removing the word "wazig".
        $removedWordText = str_replace("wazig", "", $text);

        // Trimming the unnecessary spaces.
        $trimmedText = trim($removedWordText);

        // Changing the first letter of every word to a capital one.
        $capitalWordText = ucwords($trimmedText);

        // Replacing the spaces to a double dash.
        $replacedText = str_replace(" ", "--", $capitalWordText);

        // Adding all solutions to the array.
        $sentences = ["removed" => $removedWordText, "trimmed" => $trimmedText, "capital" => $capitalWordText, "replaced" => $replacedText];

        // Returning the array.
        return $sentences;
    }
}