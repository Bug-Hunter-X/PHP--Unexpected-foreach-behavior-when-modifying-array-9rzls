function foo(array $arr) {
  return array_filter($arr, fn($value) => $value !== 'a');
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )

// Solution:
// The corrected code uses array_filter, which is more efficient and avoids the index-related issue of the foreach loop.
// It iterates through the array and returns a new array containing only the elements that satisfy the given condition (i.e., not equal to 'a').