# Array

Given an array, write the PHP code, in as elegant a way as possible, to print how many times the item "strawberry" appears in the array.
Do not use either “for”, or “foreach” statements.

## Code

```php
<?php
$array = [
    'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
    'red' => ['strawberry', 'cheer', 'tomato'],
    'sweet' => ['sugar', 'cake', 'strawberry'],
];

// Flatten the nested arrays and count occurrences of each element
$flatArray = [];
array_walk_recursive($array, function ($value) use (&$flatArray) {
    $flatArray[] = $value;
});

// Count occurrences of "strawberry"
$counts = array_count_values($flatArray);
$strawberryCount = isset($counts['strawberry']) ? $counts['strawberry'] : 0;

echo "The item 'strawberry' appears $strawberryCount times in the array.";
```

##Usage

1. Modify the $array variable to contain your nested array data.
2. Run the PHP script:
```bash
php index.php
```
3. The script will count the occurrences of "strawberry" in the nested array and display the result.

Example output:
```bash
The item 'strawberry' appears 3 times in the array.
```