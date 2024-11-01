<?php 
$array1 = array('Apple', 'Banana', 'Orange', 'Pineapple');

// Using a for loop to iterate through the array
for ($i = 0; $i < count($array1); $i++){
    echo 'Fruit ' . ($i + 1) . ': ' . $array1[$i] . '<br>';
}
?>

<?php
$person = array(
    'name' => 'Alice',
    'age' => 28,
    'email' => 'alice@example.com',
);

// Using foreach to iterate through the associative array
foreach ($person as $key => $value) {
    echo ucfirst($key) . ': ' . $value . '<br>';
}
?>

<?php
$numbers = array(1, 2, 3, 4, 5, 6);

// Filter out even numbers
$evenNumbers =  array_filter($numbers, function($num) {
    return $num % 2 === 0;
});

// Using foreach to display the even numbers
foreach ($evenNumbers as $numbers) {
    echo 'Even number: ' . $number . '<br>';
}
?>

<?php
$stack = array('Apple', 'Banana', 'Orange');

// Using foreach to iterate through the stack
foreach($stack as $fruit) {
    echo 'Fruit: ' . $fruit . '<br>';
}
?>