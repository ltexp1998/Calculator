<?php

/*
/
/ even(pair) or odd(impair) number calculation
/
*/

function isEvenOrOdd($n) {
  if ($n%2 == 1 )
    $even_odd = "$n est un nombre impair";
  else
    $even_odd = "$n est un nombre pair";
  echo $even_odd;
}

/*
/
/ prime number calculation
/
*/

function isPrimeNumber($n) {

  if ($n == 1)
    $prime = "$n n'est pas premier";

  else
    for ($i = 2; $i <= $n/2; $i++)
      if ($n % $i == 0)
        $prime = "$n n'est pas un nombre premier";

      else
        $prime = "$n est un nombre premier";

  echo $prime;
}

/*
/
/ fibonacci number calculation
/
*/

function isPerfectSquare($x)
{
    $s = (sqrt($x));
    return ($s * $s == $x);
}

// Returns true if n is a
// Fibonacci Number, else false

function isFibonacci($y)
{
  // n is Fibonacci if one of
  // 5*n*n + 4 or 5*n*n - 4 or
  // both is a perfect square
  return isPerfectSquare(5 * $y * $y + 4) ||
          isPerfectSquare(5 * $y * $y - 4);
}

function fibonacciTest($n) {
  if (isFibonacci($n))
    echo "$n est un nombre de Fibonacci";
  else
    echo "$n n'est pas un nombre de Fibonacci";
}
