<?php
// Using echo

$first_name = 'Trayana';
$separator = ' ';
$last_name = 'Boykova';
$session_number = 1;
$float_number = 1.23;
$year = 2024;

// echo "Hello, world!";

// echo '<br>'; 

// // Using print
// print "Hello, world!";

// echo $first_name;
// echo $separator;
// echo $last_name;
// echo "<br>";
// echo 'Current year is ' . $year;

// echo "<br>";
// print 'show me an int number: ' . $session_number . "<br>";
// echo 'show me a float number: ' . $float_number;
?>

<h1>Hello, welcome to my homepage!</h1>
<div>
    Hello, <?php echo $first_name . $separator . $last_name; ?>
    <?php
    echo '<div>';
    echo 'The current year is ' . $year;
    echo '</div>';
    ?>
</div>
