<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Suggestions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .suggestion {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>View Suggestions</h1>
        <?php
        // Read suggestions from file
        $suggestions = file("suggestions.txt", FILE_IGNORE_NEW_LINES);
        
        // Check if suggestions exist
        if (!empty($suggestions)) {
            // Loop through suggestions and display each one
            foreach ($suggestions as $suggestion) {
                echo '<div class="suggestion">' . htmlspecialchars($suggestion) . '</div>';
            }
        } else {
            echo '<p>No suggestions found.</p>';
        }
        ?>
    </div>
</body>
</html>