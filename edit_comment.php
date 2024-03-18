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

// Check if the ID parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve comment from the database
    $sql = "SELECT * FROM comments WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Comment not found";
        exit;
    }
}



?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Comment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        nav {
            height: 10vh;
        }

        .btn {
            width: 200px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Aril Ponco Nugroho</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portofolio.php">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="comment.php">Comments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    // Check if the form is submitted for comment update
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = sanitize_input($_POST['name']);
        $comment = sanitize_input($_POST['comment']);

        // Update comment in the database
        $sql = "UPDATE comments SET name='$name', comment='$comment' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Comment updated successfully";
        } else {
            echo "Error updating comment: " . $conn->error;
        }
    }


    // Close the database connection
    $conn->close();
    ?>

    <!-- Edit comment form -->
    <div class="container mt-4">
        <h3>Edit Comment</h3>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comment:</label>
                <textarea id="comment" name="comment" class="form-control" required><?php echo $row['comment']; ?></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update Comment</button>
            <a href="comment.php" class="btn btn-secondary">Back</a>
        </form>

    </div>

    <footer class="footer text-center bg-dark text-light p-4 fixed-bottom">
        <div class="container">
            <p>&copy; Aril Ponco Nugroho. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>