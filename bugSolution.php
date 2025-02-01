```php
function calculateSum($a, $b) {
  // Explicit type checking
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  } else {
    return "Error: Non-numeric arguments";
  }
}

$result1 = calculateSum(10, 20); //Correct
var_dump($result1); // Output: int(30)

$result2 = calculateSum(10, '20'); //Type Casting
$result2 = calculateSum((int)$a,(int)$b);
var_dump($result2); // Output: int(30)

$result3 = calculateSum(10, 'abc');
var_dump($result3); // Output: string(19) "Error: Non-numeric arguments"
```