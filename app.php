<?php 
/* 8 kyu
Find Maximum and Minimum Values of a List
PHP: */
  function maximum($array) {
    return max($array);
  }
  function minimum($array) {
    return min($array);
  }

/*   8 kyu
Multiply
PHP: */
function multiply($a,$b){
  return $a*$b;
}

/* 8 kyu
Invert values
PHP: */
function invert(array $a): array {
$c = [];
  foreach($a as $n){
    $c[] = $n - (2*$n);
  
  }
  
  return $c;
}
invert([4,5,6]);

/* 8 kyu
Remove String Spaces
PHP: */
function no_space(string $s): string {
  return preg_replace('/\s+/', '', $s);
}

/* 8 kyu
Reversing Words in a String
PHP: */
function reverse($string) {
  return implode(' ',array_reverse(explode(' ', $string)));
}

reverse('hello world');

?>




