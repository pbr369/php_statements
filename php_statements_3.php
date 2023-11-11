<?php

$monthName = "march";

switch (strtolower($monthName)) {
    case "january":
    case "march":
    case "may":
    case "july":
    case "august":
    case "october":
    case "december":
        $daysInMonth = 31;
        break;

    case "april":
    case "june":
    case "september":
    case "november":
        $daysInMonth = 30;
        break;

    case "february":
        $daysInMonth = '28 or 29'; 
        break;

    default:
        $daysInMonth = "invalid";
        break;
}

echo "The number of days in $monthName is $daysInMonth.";

?>