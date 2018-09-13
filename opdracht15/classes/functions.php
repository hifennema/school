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
     * @var array
     */
    private $persons = [
        "09-06" => [
            ["name" => "Peter de Grote", "job" => "Russische tzaar", "born" => "1672"],
            ["name" => "Johnny Depp", "job" => "Amerikaanse acteur", "born" => "1963"],
            ["name" => "Dione de Graaff", "job" => "Nederlandse televisiepresentatrice", "born" => "1969"],
            ["name" => "Matthew Bellamy", "job" => "Britse zanger, gistaris en toetsenist (Muse)", "born" => "1978"],
            ["name" => "Wesley Sneijder", "job" => "Nederlandse voetballer", "born" => "1984"],
            ["name" => "Matthias Mayer", "job" => "Oostenrijkse alpineskiër (goud Sotchi)", "born" => "1990"]
        ],
        "08-11" => [
            ["name" => "Joeri Roijenga", "job" => "Developer", "born" => "1997"],
            ["name" => "Guus Hiddink", "job" => "Ex-voetballer + voetbaltrainer", "born" => "1946"]
        ]
    ];

    /**
     * @return bool
     */
    private function getPostValue() {
        // Checking if the user has made a choice.
        if (isset($_POST["fruit-choice"]))
            return $_POST["fruit-choice"];

        // Return in case there no choice made.
        return false;
    }

    public function getPersons() {
        $choice = $this->getPostValue();
        if ($choice)
            $persons = $this->persons[$this->getPostValue()];

        $data = [
            "date" => $choice,
            "persons" => $persons
        ];

        return $data;
    }
}