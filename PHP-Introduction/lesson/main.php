<?php 
// Including the header.php file
include 'header.php';

echo '<p>This is tha main content of the page.</p>';

// Including footer.php.file
include 'footer.php';
?>

<?php
// First include
include_once 'header.php';

// Trying to include it again, but it won't run the second time
include_once 'header.php';

echo '<p>This is the main content of the page.</p>';
?>