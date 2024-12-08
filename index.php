<?php 
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