<?php 

//NUMBER 6


/*
This code should store "codewa.rs" as a variable called name but it's not working. Can you figure out why?
*/

//MY SOLUTION
$name = "codewa.rs";

return $name;

//NUMBER 5

/*
Given an integer (1 <= n <= 100) representing a person's age, return their minimum and maximum age range.

This equation doesn't work when the age <= 14, so use this equation instead:

min = age - 0.10 * age
max = age + 0.10 * age
You should floor all your answers so that an integer is given instead of a float (which doesn't represent age). Return your answer in the form [min]-[max]

##Examples:

age = 27   =>   20-40
age = 5    =>   4-5
age = 17   =>   15-20
*/

//MY SOLUTION


function datingRange($age) {
  if ($age > 14) {
    $min = floor($age / 2 + 7); 
    $max = floor(($age - 7) * 2);
  } 
  else
  { 
    $min = floor($age - 0.10 * $age); 
    $max = floor($age + 0.10 * $age); } 
  $low = (string)$min; $high = (string)
    $max; return "$low-$high"; 
}
//NUMBER 4

/*
Write function parseFloat which takes an input and returns a number or Nothing if conversion is not possible.
*/

//MY SOLUTION
function parseF($s) { 
  $num = floatval($s); 
   if (is_numeric($s)) { 
   return $num;
    } 
   else 
   { 
   return null; 
   } 
  }


//NUMBER 3

/*
Two players - "black" and "white" are playing a game. The game consists of several rounds. If a player wins in a round, he is to move again during the next round. 
If a player loses a round, it's 
the other player who moves on the next round. Given whose turn it was on the previous round and whether he won, determine whose turn it is on the next round.
*/

//MY SOLUTION

function whose_move(string $last_player, bool $win): string {
  
    if ($last_player === "black" && $win === false) {
      return "white";
    }
    else if ($last_player === "white" && $win === true) {
      return "white";
    }
     else if ($last_player === "white" && $win === false) {
      return "black";
    }
    else if ($last_player === "black" && $win === true) {
      return "black";
    }
  }
//NUMBER 2

/*
This code does not execute properly. Try to figure out why.
*/

//MY SOLUTION
function multiply($a, $b) {
    return $a * $b;
}

//NUMBER 1

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