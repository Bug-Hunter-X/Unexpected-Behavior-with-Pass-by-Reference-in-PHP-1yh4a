# PHP Pass-by-Reference Bug

This repository demonstrates a common yet subtle bug in PHP related to pass-by-reference in functions.  The example highlights how modifications within a function can unexpectedly affect the original variable outside the function's scope.  The solution showcases how to prevent this issue by understanding how to copy arrays correctly.

## Bug Description

The `increment_array` function intends to increment each element of an array. However, the use of pass-by-reference using `&` affects the original array directly, which might not be the intended behaviour in all cases. This is especially problematic when the function is used with multiple arrays, as modifications to one can unintentionally affect others.  The solution provides methods to solve this problem.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output, paying attention to the values of the `$numbers` array after the function call.