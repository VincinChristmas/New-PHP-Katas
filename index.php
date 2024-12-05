<?php 
//NUMBER !

/*
This code does not execute properly. Try to figure out why.
*/

//MY SOLUTION
function multiply($a, $b) {
    return $a * $b;
}

//NUMBER 2

/*
In this kata, we will make a function to test whether a period is late.

Our function will take three parameters:

last - The Date object with the date of the last period

today - The Date object with the date of the check

cycleLength - Integer representing the length of the cycle in days

Return true if the number of days passed from last to today is greater than cycleLength. Otherwise, return false.
*/

//MY SOLUTION
function periodIsLate($last, $today, $cycleLength) {
    
    $interval = $last->diff($today);
    
    
    return $interval->days > $cycleLength;
}



>?