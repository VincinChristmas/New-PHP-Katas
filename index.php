<?php 

//NUMBER 33


/*
https://www.codewars.com/kata/582cb0224e56e068d800003c
*/


//MY SOLUTION
function litres(float $t): int {
  $water = $t * 0.5;
  return floor($water);
}


//NUMBER 32

/*
Given a set of numbers, return the additive inverse of each. Each positive becomes negatives, and the negatives become positives.

[1, 2, 3, 4, 5] --> [-1, -2, -3, -4, -5]
[1, -2, 3, -4, 5] --> [-1, 2, -3, 4, -5]
[] --> []
*/

//MY SOLUTION
function invert(array $a): array {
  for ($i = 0; $i < count($a); $i++) {
    $a[$i] = -1 * $a[$i];
  }
  return $a;
}

//NUMBER 31

/*
In this simple exercise, you will write a function that takes two integers; n and limit; and
 returns a list of the multiples of n up to and possibly including limit.

It is guaranteed that n > 0 and limit >= n.

For example, if the parameters passed are (2, 6), the function should return [2, 4, 6] as 2, 4, and 6 
are the multiples of 2 up to 6.

Examples
n = 2; limit = 6 --> [2, 4, 6]
n = 2; limit = 5 --> [2, 4]
*/

//MY SOLUTION
function findMultiples(int $integer, int $limit): array{
  $sum = 0;
  $finalArray = [];
  $multiple = $integer;
  while ($multiple <= $limit) {
    array_push($finalArray, $multiple);
    $multiple += $integer;  
  }
  return $finalArray;
}

//NUMBER 30

/*
In this simple exercise, you will create a program that will take two lists of integers, a and b.
 Each list will consist of 3 positive integers above 0, representing the dimensions of cuboids a and b. 
 You must find the difference of the cuboids' volumes regardless of which is bigger.

For example, if the parameters passed are ([2, 2, 3], [5, 4, 1]), the volume of a is 12 and the volume of b is 20. 
Therefore, the function should return 8.

Your function will be tested with pre-made examples as well as random ones.

If you can, try writing it in one line of code.

*/

//MY SOLUTION
function findDifference(array $a, array $b): int {
  $sumA = $a[0] * $a[1] * $a[2];
  $sumB = $b[0] * $b[1] * $b[2];
  return abs($sumA - $sumB);
}


//NUMBER 29

/*
To find the volume (centimeters cubed) of a cuboid you use the formula:

volume = Length * Width * Height

But someone forgot to use proper record keeping, so we only have the volume, and the length of a single side!

It's up to you to find out whether the cuboid has equal sides (= is a cube).

Return true if the cuboid could have equal sides, return false otherwise.

Return false for invalid numbers too (e.g volume or side is less than or equal to 0).

Note: side will be an integer
*/

//MY SOLUTION
function cubeChecker($volume, $side){
  if ($side <= 0) {
    return false;
  }
  if ($volume <= 0) {
    return false;
  }
  if (($side * $side * $side) === $volume) {
    return true;
  }
  else {
    return false;
  }

}

//NUMBER 28

/*
Given an unsorted array of 3 positive integers [ n1, n2, n3 ], determine if it is possible to form a Pythagorean Triple using those 3 integers.

A Pythagorean Triple consists of arranging 3 integers, such that:

a2 + b2 = c2

Examples
[5, 3, 4] : it is possible to form a Pythagorean Triple using these 3 integers: 32 + 42 = 52

[3, 4, 5] : it is possible to form a Pythagorean Triple using these 3 integers: 32 + 42 = 52

[13, 12, 5] : it is possible to form a Pythagorean Triple using these 3 integers: 52 + 122 = 132

[100, 3, 999] : it is NOT possible to form a Pythagorean Triple using these 3 integers - no matter how you arrange them, 
you will never find a way to satisfy the equation a2 + b2 = c2

Return Values
For Python: return True or False
For JavaScript: return true or false
Other languages: return 1 or 0 or refer to Sample Tests.
*/

//MY SOLUTION
function pythagorean_triple($integers) {
  if (($integers[0] ** 2 ) + ($integers[1] ** 2 ) == ($integers[2] ** 2 ) || 
      ($integers[1] ** 2 ) + ($integers[2] ** 2 ) == ($integers[0] ** 2 ) ||
      ($integers[2] ** 2 ) + ($integers[0] ** 2 ) == ($integers[1] ** 2 )) {
    return 1;
  }
  else {
    return 0;
  }    
}

//NUMBER 27

/*
A hero is on his way to the castle to complete his mission. 
However, he's been told that the castle is surrounded with a couple of powerful dragons! 
each dragon takes 2 bullets to be defeated, our hero has no idea how many bullets he should carry.. 
Assuming he's gonna grab a specific given number of bullets and move forward to fight another specific given number of dragons, will he survive?

Return true if yes, false otherwise :)
*/

//MY SOLUTION
function hero(int $bullets, int $dragons): bool{
  if ($dragons === 0) {
    return true;
  }
  else if (($bullets / $dragons) >= 2) {
    return true;
  }
else {
  return false;
}
}

//NUMBER 26

/*
Build a function that returns an array of integers from n to 1 where n>0.

Example : n=5 --> [5,4,3,2,1]
*/

//MY SOLUTION
function reverseSeq (int $n): array {
  $splinter = [];
    while ($n > 0) {
      array_push($splinter, $n);
      $n = $n - 1;
    }
  return $splinter;

//NUMBER 25

/*
ou are given two interior angles (in degrees) of a triangle.

Write a function to return the 3rd.

Note: only positive integers will be tested.
*/

//MY SOLUTION
function otherAngle($a, $b) {
  return 180 - ($a + $b);
}

//NUMBER 24

/*
Create a function that returns the CSV representation of a two-dimensional numeric array.

Example:

input:
   [[ 0, 1, 2, 3, 4 ],
    [ 10,11,12,13,14 ],
    [ 20,21,22,23,24 ],
    [ 30,31,32,33,34 ]] 
    
output:
     '0,1,2,3,4\n'
    +'10,11,12,13,14\n'
    +'20,21,22,23,24\n'
    +'30,31,32,33,34'
Array's length > 2.

More details here: https://en.wikipedia.org/wiki/Comma-separated_values

Note: you shouldn't escape the \n, it should work as a new line.
*/

//MY SOLUTION
function toCsvText($array) {
  $sentence = '';
  foreach ($array as $set) {
      $sentence .= implode(',', $set) . '\n'; 
  }
  $sentence = rtrim($sentence, '\n'); 
  return $sentence;
}



//NUMBER 23

/* 
Return a new array consisting of elements which are multiple of their own index in input array (length > 1).

Some cases:
[22, -6, 32, 82, 9, 25] =>  [-6, 32, 25]

[68, -1, 1, -7, 10, 10] => [-1, 10]

[-56,-85,72,-26,-14,76,-27,72,35,-21,-67,87,0,21,59,27,-92,68] => [-85, 72, 0, 68]
*/

//MY SOLUTION
function multipleOfIndex(array $arr) : array {
  $correctArr = [];
  for ($i = 0; $i < count($arr); $i++) {
   if ($i === 0) {
            if ($arr[$i] === 0) {
                array_push($correctArr, $arr[$i]);
            }
            continue;
        }
    if (($arr[$i] % $i) === 0) {
      
      array_push($correctArr, $arr[$i]);
    }
  }
  return $correctArr;
}

//NUMBER 22

/*
Introduction
The first century spans from the year 1 up to and including the year 100, the second century - 
from the year 101 up to and including the year 200, etc.

Task
Given a year, return the century it is in.

Examples
1705 --> 18
1900 --> 19
1601 --> 17
2000 --> 20
2742 --> 28
*/

//MY SOLUTION
function centuryFromYear(int $year): int{
  if ($year < 100) {
    return 1;
  }
  
  
   return ($year <= 99) ? 1 : floor(($year - 1) / 100) + 1;

//NUMBER 21

/*
All of the animals are having a feast! Each animal is bringing one dish. There is just one rule: the dish must start and end with the same letters as
 the animal's name. For example, the great blue heron is bringing garlic naan and the chickadee is bringing chocolate cake.

Write a function feast that takes the animal's name and dish as arguments and returns true or false to 
indicate whether the beast is allowed to bring the dish to the feast.

Assume that beast and dish are always lowercase strings, and that each has at least two letters. 
beast and dish may contain hyphens and spaces, but these will not appear at the beginning or end of the string. They will not contain numerals.
*/

//MY SOULUTION
function feast(beast, dish) {
  //your function here
    
    if (beast[0]=== dish[0] && beast[beast.length-1] === dish[dish.length -1]) {
      return true
    }
    else {
      return false
    }
  }

//NUMBER 20 

/*  
You are given the length and width of a 4-sided polygon. The polygon can either be a rectangle or a square.
If it is a square, return its area. If it is a rectangle, return its perimeter.
*/

//MY SOLUTION
function areaOrPerimeter (int $l, int $w){
  if ($l === $w) {
    return $l * $w;
  }
   else {
     return 2 * ($l + $w);
   }
 }

//NUMBER 19

/*
Given three integers a, b, and c, return the largest number obtained after inserting the operators +, *, 
and parentheses (). In other words, try every combination of a, b, and c with the operators, without reordering the operands, and return the maximum value.

Example
With the numbers 1, 2, and 3, here are some possible expressions:

1 * (2 + 3) = 5
1 * 2 * 3 = 6
1 + 2 * 3 = 7
(1 + 2) * 3 = 9
The maximum value that can be obtained is 9.

Notes
The numbers are always positive, in the range 1 ≤ a, b, c ≤ 10.
You can use the same operation more than once.
It is not necessary to use all the operators or parentheses.
You cannot swap the operands. For example, with the given numbers, you cannot get the expression (1 + 3) * 2 = 8.
Input and Output Examples
expressionsMatter(1, 2, 3) ==> 9, because (1 + 2) * 3 = 9.
expressionsMatter(1, 1, 1) ==> 3, because 1 + 1 + 1 = 3.
expressionsMatter(9, 1, 1) ==> 18, because 9 * (1 + 1) = 18.
*/

//MY SOLUTION
function expressionMatter($a, $b, $c) {
  $combinations = [
    ($a + $b) * $c,
    $a + ($b * $c),
    ($a * $b) + $c,
    $a * ($b + $c),
    $a + $b + $c,
    $a * $b * $c 
  ];
    return max($combinations);
}

//NUMBER 18

/*
Numbers ending with zeros are boring.

They might be fun in your world, but not here.

Get rid of them. Only the ending ones.

1450   -> 145
960000 -> 96
1050   -> 105
-1050  -> -105
0      -> 0
*/

//MY SOLUTION
function noBoringZeros($n) {
  $n = (string)$n;
    $n = rtrim($n, '0');
    if ($n === '') {
          return 0;
      }
    return (int)$n;
  }

//NUMBER 17

/*
Numbers ending with zeros are boring.

They might be fun in your world, but not here.

Get rid of them. Only the ending ones.

1450   -> 145
960000 -> 96
1050   -> 105
-1050  -> -105
0      -> 0
Note: Zero should be left as it is.
*/

//MY SOLUTION 
function noBoringZeros($n) {
  $welcome = [];
  $inspection = explode(",",$n);
  for ($i = 0; $i < count($inspection); $i++) {
    if ($inspection[$i] !== 0 && $inspection[$i] !== count($inspection))
      array_push($welcome, $inspection[$i]);
  }
  
  
  
  return implode("", $welcome);
}

//NUMBER 16

/*
If you can't sleep, just count sheeps!!

Task:
Given a non-negative integer, 3 for example, return a string with a 
murmur: "1 sheep...2 sheep...3 sheep...". Input will always be valid, i.e. no negative integers.
*/
//MY SOLUTION
function countsheep($num){
  $sum = 0;
  $allSheep = [];
  if ($num === 0) {
    return '';
  }
  else {
  while ($sum < $num) {
     $sum++;
    array_push($allSheep, $sum . " " . 'sheep...');

    }
  }  
  $countedSheep = join($allSheep);
  return $countedSheep;
}
//NUMBER 15

/*
Your function takes two arguments:

current father's age (years)
current age of his son (years)
Сalculate how many years ago the father was twice as old as his son (or in how many years he will be twice as old). 
The answer is always greater or equal to 0, no matter if it was in the past or it is in the future.
*/

//MY SOLUTION
function twice_as_old($dad_years_old, $son_years_old) {
  $theRightYears = $son_years_old * 2;
    $sum = 0;
    if ($dad_years_old < $theRightYears) {
      while (($dad_years_old + $sum) != $theRightYears) {
        $sum ++;
      }
    }
 elseif ($dad_years_old > $theRightYears) {
   while ($dad_years_old - $sum != $theRightYears ) {
       $sum++;
      }    
 }
 return $sum;
}
//NUMBER 14
/*
There are pillars near the road. The distance between the pillars is the same and the width of 
the pillars is the same. Your function accepts three arguments:

number of pillars (≥ 1);
distance between pillars (10 - 30 meters);
width of the pillar (10 - 50 centimeters).
Calculate the distance between the first and the last pillar in centimeters (without the width of the first and last pillar).
*/

//MY SOLUTION
function pillars($numberOfPillars, $dist, $width)
{
  if ($numberOfPillars === 1) {
    return 0;
  }
  elseif ($numberOfPillars === 2) {
    return $dist * 100;
  }
  else {
  return (($numberOfPillars - 1 ) * ($dist * 100)) + ($numberOfPillars - 2) * $width;
}
  }

//NUMBER 13

/*    
Our football team has finished the championship.

Our team's match results are recorded in a collection of strings. Each match is represented 
by a string in the format "x:y", where x is our team's score and y is our opponents score.

For example: ["3:1", "2:2", "0:1", ...]

Points are awarded for each match as follows:

if x > y: 3 points (win)
if x < y: 0 points (loss)
if x = y: 1 point (tie)
We need to write a function that takes this collection and returns the number of points 
our team (x) got in the championship by the rules given above.

Notes:

our team always plays 10 matches in the championship
0 <= x <= 4
0 <= y <= 4
*/

//MY SOLUTION
function points(array $games): int {
  $sumX = 0;
  foreach ($games as $game) {
    if (intval($game[0]) > intval($game[2])) {
      $sumX += 3;
      
    }
    if (intval($game[0]) < intval($game[2])) {
      $sumX += 0;
      
    }
    if (intval($game[0]) == intval($game[2])) {
      $sumX += 1;
     
    }
  }
  return $sumX;
}
//NUMBER 12 

/*
Given a month as an integer from 1 to 12, return to which quarter of the year it belongs as an integer number.

For example: month 2 (February), is part of the first quarter; month 6 (June), is part of the
 second quarter; and month 11 (November), is part of the fourth quarter.

Constraint:

1 <= month <= 12
*/

//MY SOLUTION
function quarterOf($month) {
  switch($month) {
      case 1:
      case 2:
      case 3: 
      return 1;
      break;
      
      case 4:
      case 5:
      case 6: 
      return 2;
      break;
      
      case 7:
      case 8:
      case 9: 
      return 3;
      break;
      
      case 10:
      case 11:
      case 12: 
      return 4;
      break;
      
      default:
      return "please enter a month";
  } 
}

//NUMBER 11

/*
You are given a string of letters and an array of numbers.
The numbers indicate positions of letters that must be removed, in order, starting from the beginning of the array.
After each removal the size of the string decreases (there is no empty space).
Return the only letter left.

Example:

let str = "zbk", arr = [0, 1]
    str = "bk", arr = [1]
    str = "b", arr = []
    return 'b'
*/

//MY SOLUTION
function lastSurvivor(string $letters, array $coords): string {
  $preppedLetters = str_split($letters);
  $newHouse ='';
  for ($x = 0; $x < count($coords); $x++) {
     $position = $coords[$x];
    if (isset($preppedLetters[$position])) {
      array_splice($preppedLetters, $position, 1);
    }
  }
  return $preppedLetters[0];
}

//NUMBER 10
/*
Given a list of the times you need to brew each coffee, return the minimum total waiting time.
If you get it right, you will get that raise your boss promised you!

Note that:

It is possible to receive no orders. (It's a free day :), maybe the next day your boss will start giving you
 some orders himself, you probably don't want that :) )

You can only brew one coffee at a time.

Since you have one coffee machine, you have to wait for it to brew the current coffee before you can move on to the next one.

Ignore the time you need to serve the coffee and the time you need to take the orders and write down the time you need to make each one of them.

If you have three customers with times [4,3,2], the first customer is going to wait 4 minutes for his coffee, the second customer 
is going to wait 4 minutes (the time needed for the first customer to get his coffee), another 2 minutes (the time needed to clean the machine) 
and 3 more minutes (the time you need to brew his coffee), so in total 9 minutes. The third customer, by the same logic, is about to wait
 9 minutes (for the first two customers) + 2 more minutes(cleaning) + 2 minutes (his coffee brewing time). This order of 
 brewing the coffee will end up in a total waiting time of 26 minutes, but note that this may not be the minimum time needed. 
 This time depends on the order you choose to brew the cups of coffee.

The order in which you brew the coffee is totally up to you.

Examples:

coffees = [3,2,5,10,9]  ->  85
coffees = [20,5]        ->  32
coffees = [4,3,2]       ->  22
*/

//MY SOLUTION
function barista($coffees){
  sort($coffees);
  $totalTime = 0;
  $totalBrew = 0;
  $length =  count($coffees);
  for($x=0; $x < $length; $x++) {
    $waitingTime = $totalBrew + $coffees[$x];
    $totalTime += $waitingTime;
    $totalBrew += $coffees[$x] + 2;  
  }
  return $totalTime;
}

//NUMBER 9
/*
Your task is to write a function that takes a list of three languages and returns the language the group should use.7 8

Examples:9

The language for a group of three native French speakers is French: FFF → F

A group of two native Italian speakers and a Romansh speaker converses in Romansh: IIK → K

When three people meet whose native languages are German, French, and Romansh, the group language is Italian: DFK → I
*/

//MY SOLUTION
function trilingualDemocracy($group) {
  $languages = ['D', 'F', 'I', 'K'];
  $group = str_split($group);
  sort($group);
  if ($group[0] === $group[1] && $group[0] === $group[2]) {
      return $group[0];
  }
  if ($group[0] === $group[1] && $group[0] !== $group[2]) {
      return $group[2];
  }
  if ($group[1] === $group[2] && $group[0] !== $group[1]) {
      return $group[0];
  }
  $remaining_languages = array_diff($languages, $group);
  return array_shift($remaining_languages);
}

//NUMBER 8
/*You task is to implement an simple interpreter for the notorious esoteric language HQ9+ that will work for a single character input:

  If the input is 'H', return 'Hello World!'
  If the input is 'Q', return the input
  If the input is '9', return the full lyrics of 99 Bottles of Beer. It should be formatted like this:
  99 bottles of beer on the wall, 99 bottles of beer.
  Take one down and pass it around, 98 bottles of beer on the wall.
  98 bottles of beer on the wall, 98 bottles of beer.
  Take one down and pass it around, 97 bottles of beer on the wall.
  97 bottles of beer on the wall, 97 bottles of beer.
  Take one down and pass it around, 96 bottles of beer on the wall.
  ...
  ...
  ...
  2 bottles of beer on the wall, 2 bottles of beer.
  Take one down and pass it around, 1 bottle of beer on the wall.
  1 bottle of beer on the wall, 1 bottle of beer.
  Take one down and pass it around, no more bottles of beer on the wall.
  No more bottles of beer on the wall, no more bottles of beer.
  Go to the store and buy some more, 99 bottles of beer on the wall.
  For everything else, don't return anything (return null in C#, None in Rust, and "" in Haskell).
  (+ has no visible effects so we can safely ignore it.) */
  
//MY SOLUTION
function HQ9($code) {
  if ($code === 'H') {
    return 'Hello World!';
  }
  if ($code === 'Q') {
    return $code;
  }
  if ($code === '9') {
    return '99 bottles of beer on the wall, 99 bottles of beer.
Take one down and pass it around, 98 bottles of beer on the wall.
98 bottles of beer on the wall, 98 bottles of beer.
Take one down and pass it around, 97 bottles of beer on the wall.
97 bottles of beer on the wall, 97 bottles of beer.
Take one down and pass it around, 96 bottles of beer on the wall.
96 bottles of beer on the wall, 96 bottles of beer.
Take one down and pass it around, 95 bottles of beer on the wall.
95 bottles of beer on the wall, 95 bottles of beer.
Take one down and pass it around, 94 bottles of beer on the wall.
94 bottles of beer on the wall, 94 bottles of beer.
Take one down and pass it around, 93 bottles of beer on the wall.
93 bottles of beer on the wall, 93 bottles of beer.
Take one down and pass it around, 92 bottles of beer on the wall.
92 bottles of beer on the wall, 92 bottles of beer.
Take one down and pass it around, 91 bottles of beer on the wall.
91 bottles of beer on the wall, 91 bottles of beer.
Take one down and pass it around, 90 bottles of beer on the wall.
90 bottles of beer on the wall, 90 bottles of beer.
Take one down and pass it around, 89 bottles of beer on the wall.
89 bottles of beer on the wall, 89 bottles of beer.
Take one down and pass it around, 88 bottles of beer on the wall.
88 bottles of beer on the wall, 88 bottles of beer.
Take one down and pass it around, 87 bottles of beer on the wall.
87 bottles of beer on the wall, 87 bottles of beer.
Take one down and pass it around, 86 bottles of beer on the wall.
86 bottles of beer on the wall, 86 bottles of beer.
Take one down and pass it around, 85 bottles of beer on the wall.
85 bottles of beer on the wall, 85 bottles of beer.
Take one down and pass it around, 84 bottles of beer on the wall.
84 bottles of beer on the wall, 84 bottles of beer.
Take one down and pass it around, 83 bottles of beer on the wall.
83 bottles of beer on the wall, 83 bottles of beer.
Take one down and pass it around, 82 bottles of beer on the wall.
82 bottles of beer on the wall, 82 bottles of beer.
Take one down and pass it around, 81 bottles of beer on the wall.
81 bottles of beer on the wall, 81 bottles of beer.
Take one down and pass it around, 80 bottles of beer on the wall.
80 bottles of beer on the wall, 80 bottles of beer.
Take one down and pass it around, 79 bottles of beer on the wall.
79 bottles of beer on the wall, 79 bottles of beer.
Take one down and pass it around, 78 bottles of beer on the wall.
78 bottles of beer on the wall, 78 bottles of beer.
Take one down and pass it around, 77 bottles of beer on the wall.
77 bottles of beer on the wall, 77 bottles of beer.
Take one down and pass it around, 76 bottles of beer on the wall.
76 bottles of beer on the wall, 76 bottles of beer.
Take one down and pass it around, 75 bottles of beer on the wall.
75 bottles of beer on the wall, 75 bottles of beer.
Take one down and pass it around, 74 bottles of beer on the wall.
74 bottles of beer on the wall, 74 bottles of beer.
Take one down and pass it around, 73 bottles of beer on the wall.
73 bottles of beer on the wall, 73 bottles of beer.
Take one down and pass it around, 72 bottles of beer on the wall.
72 bottles of beer on the wall, 72 bottles of beer.
Take one down and pass it around, 71 bottles of beer on the wall.
71 bottles of beer on the wall, 71 bottles of beer.
Take one down and pass it around, 70 bottles of beer on the wall.
70 bottles of beer on the wall, 70 bottles of beer.
Take one down and pass it around, 69 bottles of beer on the wall.
69 bottles of beer on the wall, 69 bottles of beer.
Take one down and pass it around, 68 bottles of beer on the wall.
68 bottles of beer on the wall, 68 bottles of beer.
Take one down and pass it around, 67 bottles of beer on the wall.
67 bottles of beer on the wall, 67 bottles of beer.
Take one down and pass it around, 66 bottles of beer on the wall.
66 bottles of beer on the wall, 66 bottles of beer.
Take one down and pass it around, 65 bottles of beer on the wall.
65 bottles of beer on the wall, 65 bottles of beer.
Take one down and pass it around, 64 bottles of beer on the wall.
64 bottles of beer on the wall, 64 bottles of beer.
Take one down and pass it around, 63 bottles of beer on the wall.
63 bottles of beer on the wall, 63 bottles of beer.
Take one down and pass it around, 62 bottles of beer on the wall.
62 bottles of beer on the wall, 62 bottles of beer.
Take one down and pass it around, 61 bottles of beer on the wall.
61 bottles of beer on the wall, 61 bottles of beer.
Take one down and pass it around, 60 bottles of beer on the wall.
60 bottles of beer on the wall, 60 bottles of beer.
Take one down and pass it around, 59 bottles of beer on the wall.
59 bottles of beer on the wall, 59 bottles of beer.
Take one down and pass it around, 58 bottles of beer on the wall.
58 bottles of beer on the wall, 58 bottles of beer.
Take one down and pass it around, 57 bottles of beer on the wall.
57 bottles of beer on the wall, 57 bottles of beer.
Take one down and pass it around, 56 bottles of beer on the wall.
56 bottles of beer on the wall, 56 bottles of beer.
Take one down and pass it around, 55 bottles of beer on the wall.
55 bottles of beer on the wall, 55 bottles of beer.
Take one down and pass it around, 54 bottles of beer on the wall.
54 bottles of beer on the wall, 54 bottles of beer.
Take one down and pass it around, 53 bottles of beer on the wall.
53 bottles of beer on the wall, 53 bottles of beer.
Take one down and pass it around, 52 bottles of beer on the wall.
52 bottles of beer on the wall, 52 bottles of beer.
Take one down and pass it around, 51 bottles of beer on the wall.
51 bottles of beer on the wall, 51 bottles of beer.
Take one down and pass it around, 50 bottles of beer on the wall.
50 bottles of beer on the wall, 50 bottles of beer.
Take one down and pass it around, 49 bottles of beer on the wall.
49 bottles of beer on the wall, 49 bottles of beer.
Take one down and pass it around, 48 bottles of beer on the wall.
48 bottles of beer on the wall, 48 bottles of beer.
Take one down and pass it around, 47 bottles of beer on the wall.
47 bottles of beer on the wall, 47 bottles of beer.
Take one down and pass it around, 46 bottles of beer on the wall.
46 bottles of beer on the wall, 46 bottles of beer.
Take one down and pass it around, 45 bottles of beer on the wall.
45 bottles of beer on the wall, 45 bottles of beer.
Take one down and pass it around, 44 bottles of beer on the wall.
44 bottles of beer on the wall, 44 bottles of beer.
Take one down and pass it around, 43 bottles of beer on the wall.
43 bottles of beer on the wall, 43 bottles of beer.
Take one down and pass it around, 42 bottles of beer on the wall.
42 bottles of beer on the wall, 42 bottles of beer.
Take one down and pass it around, 41 bottles of beer on the wall.
41 bottles of beer on the wall, 41 bottles of beer.
Take one down and pass it around, 40 bottles of beer on the wall.
40 bottles of beer on the wall, 40 bottles of beer.
Take one down and pass it around, 39 bottles of beer on the wall.
39 bottles of beer on the wall, 39 bottles of beer.
Take one down and pass it around, 38 bottles of beer on the wall.
38 bottles of beer on the wall, 38 bottles of beer.
Take one down and pass it around, 37 bottles of beer on the wall.
37 bottles of beer on the wall, 37 bottles of beer.
Take one down and pass it around, 36 bottles of beer on the wall.
36 bottles of beer on the wall, 36 bottles of beer.
Take one down and pass it around, 35 bottles of beer on the wall.
35 bottles of beer on the wall, 35 bottles of beer.
Take one down and pass it around, 34 bottles of beer on the wall.
34 bottles of beer on the wall, 34 bottles of beer.
Take one down and pass it around, 33 bottles of beer on the wall.
33 bottles of beer on the wall, 33 bottles of beer.
Take one down and pass it around, 32 bottles of beer on the wall.
32 bottles of beer on the wall, 32 bottles of beer.
Take one down and pass it around, 31 bottles of beer on the wall.
31 bottles of beer on the wall, 31 bottles of beer.
Take one down and pass it around, 30 bottles of beer on the wall.
30 bottles of beer on the wall, 30 bottles of beer.
Take one down and pass it around, 29 bottles of beer on the wall.
29 bottles of beer on the wall, 29 bottles of beer.
Take one down and pass it around, 28 bottles of beer on the wall.
28 bottles of beer on the wall, 28 bottles of beer.
Take one down and pass it around, 27 bottles of beer on the wall.
27 bottles of beer on the wall, 27 bottles of beer.
Take one down and pass it around, 26 bottles of beer on the wall.
26 bottles of beer on the wall, 26 bottles of beer.
Take one down and pass it around, 25 bottles of beer on the wall.
25 bottles of beer on the wall, 25 bottles of beer.
Take one down and pass it around, 24 bottles of beer on the wall.
24 bottles of beer on the wall, 24 bottles of beer.
Take one down and pass it around, 23 bottles of beer on the wall.
23 bottles of beer on the wall, 23 bottles of beer.
Take one down and pass it around, 22 bottles of beer on the wall.
22 bottles of beer on the wall, 22 bottles of beer.
Take one down and pass it around, 21 bottles of beer on the wall.
21 bottles of beer on the wall, 21 bottles of beer.
Take one down and pass it around, 20 bottles of beer on the wall.
20 bottles of beer on the wall, 20 bottles of beer.
Take one down and pass it around, 19 bottles of beer on the wall.
19 bottles of beer on the wall, 19 bottles of beer.
Take one down and pass it around, 18 bottles of beer on the wall.
18 bottles of beer on the wall, 18 bottles of beer.
Take one down and pass it around, 17 bottles of beer on the wall.
17 bottles of beer on the wall, 17 bottles of beer.
Take one down and pass it around, 16 bottles of beer on the wall.
16 bottles of beer on the wall, 16 bottles of beer.
Take one down and pass it around, 15 bottles of beer on the wall.
15 bottles of beer on the wall, 15 bottles of beer.
Take one down and pass it around, 14 bottles of beer on the wall.
14 bottles of beer on the wall, 14 bottles of beer.
Take one down and pass it around, 13 bottles of beer on the wall.
13 bottles of beer on the wall, 13 bottles of beer.
Take one down and pass it around, 12 bottles of beer on the wall.
12 bottles of beer on the wall, 12 bottles of beer.
Take one down and pass it around, 11 bottles of beer on the wall.
11 bottles of beer on the wall, 11 bottles of beer.
Take one down and pass it around, 10 bottles of beer on the wall.
10 bottles of beer on the wall, 10 bottles of beer.
Take one down and pass it around, 9 bottles of beer on the wall.
9 bottles of beer on the wall, 9 bottles of beer.
Take one down and pass it around, 8 bottles of beer on the wall.
8 bottles of beer on the wall, 8 bottles of beer.
Take one down and pass it around, 7 bottles of beer on the wall.
7 bottles of beer on the wall, 7 bottles of beer.
Take one down and pass it around, 6 bottles of beer on the wall.
6 bottles of beer on the wall, 6 bottles of beer.
Take one down and pass it around, 5 bottles of beer on the wall.
5 bottles of beer on the wall, 5 bottles of beer.
Take one down and pass it around, 4 bottles of beer on the wall.
4 bottles of beer on the wall, 4 bottles of beer.
Take one down and pass it around, 3 bottles of beer on the wall.
3 bottles of beer on the wall, 3 bottles of beer.
Take one down and pass it around, 2 bottles of beer on the wall.
2 bottles of beer on the wall, 2 bottles of beer.
Take one down and pass it around, 1 bottle of beer on the wall.
1 bottle of beer on the wall, 1 bottle of beer.
Take one down and pass it around, no more bottles of beer on the wall.
No more bottles of beer on the wall, no more bottles of beer.
Go to the store and buy some more, 99 bottles of beer on the wall.'
 ;
  }
}


//NUMBER 7

/*
Create a function finalGrade, which calculates the final grade of a student depending on two parameters: a grade for the exam and a number of completed projects.

This function should take two arguments: exam - grade for exam (from 0 to 100); projects - number of completed projects (from 0 and above);

This function should return a number (final grade). There are four types of final grades:

100, if a grade for the exam is more than 90 or if a number of completed projects more than 10.
90, if a grade for the exam is more than 75 and if a number of completed projects is minimum 5.
75, if a grade for the exam is more than 50 and if a number of completed projects is minimum 2.
0, in other cases

*/

//MY SOLUTION
function finalGrade($exam, $projects) {
  if ($exam > 90 || $projects > 10) {
    return 100;
  }
  elseif ($exam > 75 && $projects >= 5) {
    return 90;
  }
    elseif ($exam > 50 && $projects >= 2) {
    return 75;
  }
  else {
    return 0;
  }
  }

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