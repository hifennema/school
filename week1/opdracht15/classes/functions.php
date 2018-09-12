<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 20:31
 */

/**
 * Class functions
 */
class functions
{
    /**
     * @var array
     */
    private $persons = [
        "09-06" => [
            ["name" => "Peter de Grote", "job" => "Russische tsaar", "born" => "1672"],
            ["name" => "Johnny Depp", "job" => "Amerikaanse acteur", "born" => "1963"],
            ["name" => "Dione de Graaff", "job" => "Nederlandse televisiepresentatrice", "born" => "1969"],
            ["name" => "Matthew Bellamy", "job" => "Britse zanger, gitarist en toetsenist (Muse)", "born" => "1978"],
            ["name" => "Wesley Sneijder", "job" => "Nederlandse voetballer", "born" => "1984"],
            ["name" => "Matthias Mayer", "job" => "Oostenrijkse alpineskiër (goud Sotchi)", "born" => "1990"]
        ],
        "08-11" => [
            ["name" => "Joeri Roijenga", "job" => "Developer", "born" => "1997"]
        ]
    ];

    /**
     * @return bool
     */
    public function getPostValue() {
        // Declaring variable
        $dateChoice = false;

        // Checking if the choice has been made.
        if (isset($_POST["date-choice"]))
            $dateChoice = $_POST["date-choice"];

        // Returning the choice.
        return (bool) $dateChoice;
    }

    /**
     * @param $dateChoice
     * @return array|bool
     */
    public function getPersons($dateChoice) {
        // Checking if the postvalue exists.
        if ($dateChoice)
            return ["date" => $dateChoice,"persons" => $this->persons[$dateChoice]];

        return false;
    }
}