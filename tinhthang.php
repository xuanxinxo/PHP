<?php
$month = 5; 

switch ($month) { 
    case 1: 
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $numDays = 31; 
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $numDays = 30; 
        break;
    case 2:
        $numDays = 28; 
    default:
        echo "Invalid month";
}
echo "Month $month has $numDays days.";
?>