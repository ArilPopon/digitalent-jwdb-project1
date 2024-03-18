<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>About Us</title>
    <style>
    nav {
        height: 10vh;
    }

    img {
        width: 25%;
    }

    #about {
        height: 75vh;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Aril Ponco Nugroho</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link active" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comment.php">Comments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="about" class="container my-5">
        <h2 class="text-center mb-4">About Us</h2>

        <div class="text-center">
            <img src="img/aril.jpeg" class="mb-3" alt="Aril">
            <p>Halo Nama Saya Aril Ponco Nugroho, Saya lahir di Demak pada tanggal 1 Februari 2005 <br> Saya bukan
                siapa-siapa. Sekarang saya sudah lulus dari SMK Raden Umar Said Kudus jurusan RPL atau
                Rekayasa Perangkat Lunak. </p>
        </div>

    </div>

    <footer class="footer text-center bg-dark text-light p-4">
        <div class="container">
            <p>&copy; Aril Ponco Nugroho. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>