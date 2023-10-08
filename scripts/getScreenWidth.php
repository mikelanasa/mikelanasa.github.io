<?php
// your_php_script.php - PHP script to handle AJAX request

// Check if the POST data 'screenWidth' is set
if (isset($_POST['screenWidth'])) {
    // Get the value sent from JavaScript
    $screenWidth = $_POST['screenWidth'];

    // Perform any processing you need with $screenWidth
    // For example, you can save it to a database, perform calculations, etc.

    // Send a response back to JavaScript
    $response = "Received screen width: " . $screenWidth;

    // Send the response back to JavaScript
    echo $response;

} else {
    // Handle the case where 'screenWidth' is not set
    echo "Screen width not received.";
}
?>
