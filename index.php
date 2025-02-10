<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Website Name Here</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark fixed-top shadow" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">Dynamic Title</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbartoggler" aria-controls="navbartoggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbartoggler">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active text-capitalize" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="#services">services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Packages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-capitalize" href="#desertsafari">Desert safari</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#dunebuggy">Dune Buggy</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#quadbiking">Quad Biking</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#citytours">City tours</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#yachtrentals">Yacht Rentals</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#dhowcruises">Dhow Cruises</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-warning rounded-4 text-uppercase" href="#booknow">Book Now!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- video header -->
    <header class="card text-bg-dark rounded-0 border-0">
        <video src="assets/videos/visitdubaibg.mp4" class="object-fit-cover card-img rounded-0 border-0" muted loop autoplay></video>
        <div class="card-img-overlay align-self-center">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-2">
                    <div class="col rounded-3 p-3 shadow" style="backdrop-filter: blur(15px);">
                        <h1 class="card-title text-capitalize">dynamic website title here</h1>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quos aspernatur dignissimos atque eaque beatae alias doloribus ex libero amet tempora consequatur ea neque sequi, quia cupiditate repellendus blanditiis minus?
                        </p>
                        <p class="card-text">
                            <a href="#booknow" class="btn btn-outline-primary text-uppercase fw-bold">Book now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /video header -->

    <!-- introduction -->
    <div class="bg-light">
        <div class="container py-5 position-relative">
            <div class="row row-cols-1 row-cols-md-2 g-2">
                <div class="col mx-auto">
                    <h1 class="text-center text-capitalize">Dynamic Website Title</h1>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas impedit obcaecati quia quos necessitatibus ex veritatis soluta numquam libero nulla, distinctio eligendi veniam quo esse beatae saepe iste voluptas molestiae.
                    </p>
                    <p class="text-center">
                        Nesciunt ad consequuntur, commodi, eius mollitia ea, quam beatae quibusdam non fuga temporibus esse maiores neque harum. Quibusdam, magnam corrupti? Distinctio soluta earum voluptatibus laboriosam, doloremque fuga similique unde incidunt!
                    </p>
                </div>
            </div>
            <!-- Icons -->
            <div class="position-absolute top-100 start-50 translate-middle">
                <div class="row row-cols-1">
                    <div class="col mx-auto">
                        <div class="card shadow" style="border-radius: 100px;">
                            <div class="row align-items-center p-2">
                                <div class="col">
                                    <img src="assets/images/icons/camel-ride-icon.png" width="100%" class="img-fluid" alt="camel riding dubai">
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/dune-bashing.png" width="100%" class="img-fluid" alt="dune basing dubai">
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/dune-buggy-icon.png" width="100%" class="img-fluid" alt="dune buggy dubai">
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/horse-riding-icon.png" width="100%" class="img-fluid" alt="horse riding dubai">
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/quad-bike-icons.png" width="100%" class="img-fluid" alt="quad biking dubai">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- / icons -->
        </div>
    </div>
    <!-- /introduction -->




    <!-- JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>