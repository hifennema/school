<?php
/**
 * Created by PhpStorm.
 * User: joeriroijenga
 * Date: 12-09-18
 * Time: 16:56
 */

/**
 * Class functions
 */
class functions {
    /**
     * @param $salesPrice
     * @param $purchasePrice
     * @return array
     */
    public function calculateProfit($salesPrice, $purchasePrice) {
        // Declaring array
        $prices = [];

        // Calculating the profit
        $profit = $salesPrice - $purchasePrice;

        // Putting the important values in the array.
        $prices = ["profit" => $profit, "sales" => $salesPrice, "purchase" => $purchasePrice];

        return $prices;
    }
}