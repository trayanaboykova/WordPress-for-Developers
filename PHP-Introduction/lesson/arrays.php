<?php
// Indexed array
$fruits = array("Apple", "Banana", "Orange");
$fruits_with_single = array('Apple', 'Banana', 'Orange');
$fruits_with_mixed = array('Apple', "Banana", 'Orange');
$fruits_with_brackets = ['Apple', "Banana", 'Orange'];
$fruits_with_numbers = ['Apple', 2.2, "Banana", 'Orange'];

echo $fruits[0];
echo '<br>';
echo $fruits_with_single[1];
echo '<br>';
echo $fruits_with_mixed[2];
echo '<br>';
echo $fruits_with_brackets[1];
echo '<br>';
echo $fruits_with_numbers[1];
echo '<br>';

echo $fruits[0]; // Output: Apple

// Associative Arrays
$age = array(
    "John" => 25, 
    "Jane" => 30
);

echo $age["Jane"]; // Output: 30

$users = array(
    array(
        'name' => 'John',
        'age' => 25,
        'email' => 'john@example.com',
    ),
    array(
        'name' => 'Jane',
        'age' => 30,
        'email' => 'jane@example.com',
    ),
);

// Accessing elements
echo $users[0]['name']; // Outputs: John
echo '<br>';
echo $users[1]['email']; // Outputs: jane@example.com

$array1 = array('Apple', 'Banana');
$array2 = array('Orange', 'Pineapple');

$merged_array = array_merge($array1, $array2);

// Outputs: Apple, Banana, Orange, Pineapple
// echo implode ('+', $merged_array);

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);

$stack = array('Apple', 'Banana');

// Push new element to the array
array_push($stack, 'Orange');

// Outputs: Apple, Banana, Orange
print_r($stack);

// Pop the last element from the array
$fruit = array_pop($stack);

// Output: Orange
echo $fruit;

$person = array(
    'name' => 'Alice',
    'age' => 28,
    'email' => 'alice@example.com',
);

foreach ($person as $key => $value) {
    if ($key == 'age') {
        break;
    }
    echo ucfirst($key) . ': ' . $value . '<br>';
}

// Outputs:
// Name: Alice
// Age: 28
// Email: alice@example.com

$numbers = array(1, 2, 3, 4, 5, 6);

// Filter out even numbers
$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 === 0;
});

// Outputs: 2, 4, 6
echo implode (', ', $evenNumbers);