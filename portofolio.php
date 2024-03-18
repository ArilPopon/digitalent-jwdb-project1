<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
    nav {
        height: 10vh;
    }

    #porto img {
        width: 100%;
        height: 50vh;
        object-fit: cover;
        object-position: 100% 0%;
        border-bottom: 3px solid #eaeaea;
    }
    </style>
    <title>Halaman Utama</title>
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
                        <a class="nav-link active" href="portofolio.php">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comment.php">Comments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="porto" class="container my-5">
        <h2 class="text-center mb-4">Galeri Portofolio</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://i.ibb.co/RvhZ3V1/apnfims.png" class="card-img-top" alt="ApnFilm">
                    <div class="card-body">
                        <h5 class="card-title text-center">APN Film</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://i.ibb.co/chw2JRc/clean-it.png" class="card-img-top" alt="Clean-It">
                    <div class="card-body">
                        <h5 class="card-title text-center">Landing Page clean-it</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://i.ibb.co/gw80rwv/upods.png" class="card-img-top" alt="Upods">
                    <div class="card-body">
                        <h5 class="card-title text-center">Landing Page Upods</h5>
                    </div>
                </div>
            </div>
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