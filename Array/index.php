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
