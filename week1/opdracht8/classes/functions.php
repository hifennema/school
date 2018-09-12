<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 17:45
 */

/**
 * Class functions
 */
class functions
{
    /**
     * @var float
     */
    private $pi = 3.14;

    /**
     * @param $radius
     * @return float|int
     */
    public function calculateCircumference($radius) {
        return (float) (2 * $this->pi * $radius);
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function calculateSurface($radius) {
        return (float) $this->pi * $radius * $radius;
    }
}