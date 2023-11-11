<?php

$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$totalCost1 = $quantity1 * $price1;
$totalCost2 = $quantity2 * $price2;

if ($totalCost1 < $totalCost2) {
    $bestDeal = "Deal 1";
} elseif ($totalCost2 < $totalCost1) {
    $bestDeal = "Deal 2";
} else {
    $bestDeal = "Both deals are equally good";
}

echo "The best deal to purchase the item is: $bestDeal";

?>