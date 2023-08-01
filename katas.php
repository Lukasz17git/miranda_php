<?php
# FIBONACCI FIZZ BUZZ
# https://www.codewars.com/kata/57bf599f102a39bb1e000ae5
function fibonacciFizzBuzz($amount)
{
   if ($amount < 1) return [];
   if ($amount === 1) return [1];

   $output = [1, 1];
   $amountOfNewFibonacciNumbers = $amount - 2;

   for ($i = 0; $i < $amountOfNewFibonacciNumbers; $i++) {
      $value = $output[$i] + $output[$i + 1];
      $output[] = $value;
   }

   for ($i = 0; $i < count($output); $i++) {
      $value = $output[$i];
      $text = '';

      if ($value % 3 === 0) $text = $text . 'Fizz';
      if ($value % 5 === 0) $text = $text . 'Buzz';

      if ($text) $output[$i] = $text;
   }

   return $output;
}

print_r(fibonacciFizzBuzz(20));
echo "\n";

# SUM ARRAY LIST
# https://www.codewars.com/kata/57a2013acf1fa5bfc4000921
function calculateAverage($numbers)
{
   if (empty($numbers)) {
      return 0;
   }

   $sum = array_sum($numbers);
   $count = count($numbers);
   $average = $sum / $count;

   return $average;
}

echo calculateAverage([1, 2, 3, 4, 5, 6, 7, 8, 9]);
echo "\n";

# SCROLLING TEXT
# https://www.codewars.com/kata/5a995c2aba1bb57f660001fd
function scrollingText($text)
{
   $text = strtoupper($text);
   $length = strlen($text);
   $rotations = [];

   for ($i = 0; $i < $length; $i++) {
      $left = substr($text, $i);
      $right = substr($text, 0, $i);
      $rotations[] = "$left$right";
   }

   return $rotations;
}

print_r(scrollingText("codewars"));
echo "\n";

# ALPHABET NUMBER
# https://www.codewars.com/kata/546f922b54af40e1e90001da
function alphabet_position($text)
{
   $alphabetMap = array(
      'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10,
      'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20,
      'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25, 'z' => 26
   );

   $text = strtolower($text);
   $result = '';

   for ($i = 0; $i < strlen($text); $i++) {
      $char = $text[$i];
      if (array_key_exists($char, $alphabetMap)) {
         $result .= $alphabetMap[$char] . ' ';
      }
   }

   return trim($result);
}

echo alphabet_position("The sunset sets at twelve o' clock.");
echo "\n";

# IS ASCENDING ORDER
# https://www.codewars.com/kata/56b7f2f3f18876033f000307
function inAscOrder($arr)
{
   $length = count($arr);

   if ($length === 0 || $length === 1) {
      return true;
   }

   for ($i = 1; $i < $length; $i++) {
      if ($arr[$i] < $arr[$i - 1]) {
         return false;
      }
   }
   return true;
}

echo inAscOrder([1, 6, 10, 18, 2, 4, 20]) ? 'true' : 'false';
echo "\n";
