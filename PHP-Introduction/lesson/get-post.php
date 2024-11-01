<?php

// URL http://localhost/php/get-post.php?name=alice

var_dump($_GET);

if (isset($_GET['name'])) {
    echo "Hello, " . htmlentities($_GET['name']);
} else {
    echo "Hello, guest!";
}
?>

<?php
// URL http://localhost/php/get-post.php?name=alice

?>

<h2>Form with the current page</h2>
<form method="post" action="">
    <input type="text" name="username" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>

<h2>Formi with external file</h2>
<form method="post" action="submit.php">
    <input type="text" name="username" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    echo "Welcome, " . $name;
}
?>

