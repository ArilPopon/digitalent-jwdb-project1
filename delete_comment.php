<?php
require_once 'config.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4 d-flex flex-column">
        <?php

        // Check if the ID parameter is set
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Delete comment from the database
            $sql = "DELETE FROM comments WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "Comment deleted successfully", PHP_EOL;
            } else {
                echo "Error deleting comment: " . $conn->error;
            }
        }

        // Close the database connection
        $conn->close();
        ?>
        <br>
        <a href="comment.php" class="btn btn-secondary">Back</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>