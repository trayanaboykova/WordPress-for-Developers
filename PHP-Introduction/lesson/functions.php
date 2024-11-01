<?php
function greet($name) {
    return "Hello, " . $name;
}

echo greet("Alice"); // Output: Hello, Alice
?>

<?php
function multiply_by_two ($number) {
    $result = $number * 2;
    echo 'The result of multiplying by 2 is: ' . $result . '<br>';
}

// Call the function
multiply_by_two(5); // Output: The result of multiplying by 2 is: 10
?>
