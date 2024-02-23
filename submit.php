<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the suggestion field is not empty
    if (!empty($_POST["suggestion"])) {
        // Get the suggestion/topic from the form
        $suggestion = $_POST["suggestion"];

        // Open the text file to append the suggestion
        $file = fopen("suggestions.txt", "a");

        // Write the suggestion to the file
        fwrite($file, $suggestion . "\n");

        // Close the file
        fclose($file);

        // Display a success message
        echo "Thank you for your suggestion!";
    } else {
        // Display an error message if the suggestion field is empty
        echo "Please provide a suggestion.";
    }
} else {
    // Redirect back to the form page if accessed directly
    header("Location: form.html");
    exit();
}
?>