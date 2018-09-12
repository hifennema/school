<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 16:33
 */

/**
 * Class functions
 */
class functions {
    /**
     * @param array $words
     * @return string
     */
    public function combineWords($words = []) {
        // Declaring variable
        $sentence = "";

        // Building the sentence.
        foreach ($words as $word){
            $sentence = $sentence . $word . " ";
        }

        // Returning the trimmed sentence.
        return trim($sentence);
    }
}