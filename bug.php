function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )

// Problem:
// The code above intends to remove all elements with value 'a' from the array. However, it's inefficient and can lead to unexpected behavior when working with large arrays.
// The issue is that modifying an array while iterating over it with foreach can skip elements.