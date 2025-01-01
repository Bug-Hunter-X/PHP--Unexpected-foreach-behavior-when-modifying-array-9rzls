# PHP: Unexpected foreach behavior when modifying array

This repository demonstrates an uncommon error in PHP related to modifying an array while iterating over it using a `foreach` loop.  The code attempts to remove all elements with the value 'a' but produces an unexpected result due to index skipping.

The `bug.php` file contains the problematic code, and `bugSolution.php` offers a corrected, more efficient approach.

The issue is caused by the `unset()` function used inside the loop. When an element is removed, the index of the subsequent elements changes, causing the loop to skip certain elements.