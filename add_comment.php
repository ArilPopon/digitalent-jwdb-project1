<?php
require_once 'config.php';

// Function to sanitize user inputs
function sanitize_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Comment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4 d-flex flex-column">
        <?php
        // Check if the form is submitted for comment creation
        if (isset($_POST['create'])) {
            $name = sanitize_input($_POST['name']);
            $comment = sanitize_input($_POST['comment']);

            // Insert new comment into the database
            $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

            if ($conn->query($sql) === TRUE) {
                echo "New comment created successfully", PHP_EOL;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        // Close the database connection
        $conn->close();
        ?>
        <br>
        <a href="comment.php" class="btn btn-secondary">Back</a>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>