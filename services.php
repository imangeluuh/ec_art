<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EC-Art</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS link -->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="services.css">
    <!-- Google Fonts API link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-0">
        <!-- first child -->
    
        <nav class="navbar fixed-top navbar-expand-lg header">
            <div class="container-fluid px-5 pt-3">
                <a href="#" class="navbar-brand me-5"><img src="./ec-logo.png" alt="EC-Art" class="logo"></a>
                <form action="" class="d-none d-sm-inline">
                    <div class="input-group search-bar">
                        <input type="search" class="form-control border-0" placeholder="Search" aria-label="Search">
                        <button class="btn search-btn border-0" type="submit">
                        <i class="fas fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                        <li class="nav-item px-4">
                            <a class="nav-link" aria-current="page" href="ec_art.php">HOME</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link active-link" href="services.php">SERVICES</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container p-0 d-flex justify-content-center">
            <div class="row top">
                <div class="col-lg-12 p-0">
                    <div class="row">
                        <span class="service d-flex justify-content-center align-items-center">What we offer</span>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3 d-flex flex-column align-items-center">
                            <span class="service-title fw-bold mx-4 my-4">BUY</span>
                            <img src="./buy-img.jpg" alt="" class="service-photo">
                            <p class="service-desc fw-semibold mx-5 mt-4">
                            If you're an Art Collector, you may buy an art piece directly from an Artist. You may browse the artworks by Artists, categories, your desired art style, or price range for a piece you wish to add to your art collection.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3 d-flex flex-column align-items-center">
                            <span class="service-title fw-bold mx-4 my-4">SELL</span>
                            <img src="./sell-img.jpeg" alt="" class="service-photo">
                            <p class="service-desc fw-semibold mx-5 mt-4">
                            If you're a professional or an amateur Artist, you may sell your completed artworks and be discovered along with your masterpiece.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3 d-flex flex-column align-items-center">
                            <span class="service-title fw-bold mx-4 my-4">COMMISSION</span>
                            <img src="./comms-img.jpeg" alt="" class="service-photo">
                            <p class="service-desc fw-semibold mx-5 mt-4">
                            An Art Collector/Client and Artist may transact for a Commissioned Art. The Artist will create the commissioned artwork based on the client's request.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>