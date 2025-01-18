```php
<?php
function increment_array(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
increment_array($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$moreNumbers = [4,5,6];
increment_array($moreNumbers);
print_r($moreNumbers); // Output: Array ( [0] => 5 [1] => 6 [2] => 7 )
?>
```