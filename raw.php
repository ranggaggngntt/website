<?php

// Check if the file path is provided in the URL
if(isset($_GET['file'])) {
    // Get the file path from the URL parameter
    $filePath = $_GET['file'];

    // Check if the file exists
    if (file_exists($filePath)) {
        // Read the content of the file
        $fileContent = file_get_contents($filePath);

        // Wrap the code in <pre> tags for formatting
        echo '<pre>';
        echo htmlspecialchars($fileContent); // Use htmlspecialchars to display HTML characters correctly
        echo '</pre>';
    } else {
        // File not found error
        echo "Error: File not found!";
    }
} else {
    // File parameter not provided error
    echo "Error: File parameter not provided!";
}

?>
