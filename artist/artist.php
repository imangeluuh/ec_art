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
    <link rel="stylesheet" href="style2.css">
    <!-- Google Fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row">
            <!-- header  -->
            <div class="row d-flex justify-content-end">
                <nav class="navbar navbar-expand header">
                    <div class="container-fluid d-flex justify-content-end px-3">
                        <div class="col ms-5">
                            <form action="" method="post" class="d-none d-lg-inline">
                                <div class="input-group d-flex align-items-center search-bar">
                                    <i class="fas fa-solid fa-magnifying-glass ms-3"></i>
                                    <input type="search" name="search" class="form-control border-0" placeholder="Search" aria-label="Search">
                                </div> 
                            </form>
                        </div>
                        <div class="col d-flex align-items-center justify-content-end">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./leonardo.jpg" alt="" width="50" height="50" class="rounded-circle">
                                    <span class="d-none d-md-inline mx-2">
                                        <p class="d-flex justify-content-end fw-bold m-0 artist-name">Leonardo Da Vinci</p>
                                        <p class="d-flex justify-content-end fw-semibold m-0 artist-role">Artist</p>  
                                    </span>
                                    <i class="fa-solid fa-angle-down mx-2"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul>
                            </div><button type="button" class="btn"><i class="fa-regular fa-bell fw-light mx-1"></i></button>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container-fluid">
                <!-- sidebar -->
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 position-fixed sidebar">
                    <div class="d-flex flex-column align-items-center align-items-sm-start min-vh-100">
                        <a href="artist.php"></a>
                            <img src="../logo/logo-white.png" alt="logo" class="logo d-none d-md-inline mt-5 mx-4">
                            <img src="../logo/ec.png" alt="logo" class="sm-logo d-block d-md-none p-0 pt-3">
                        </a>
                        <div class="container d-flex justify-content-center mt-5">
                            <ul class="nav nav-pills flex-column mb-sm-auto m-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item py-2">
                                    <a href="artist.php" class="profile nav-link align-middle px-0">
                                        <i class="fa-solid fa-user"></i> <span class="ms-1 d-none d-md-inline">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2">
                                    <a href="artist.php?artist_art" class="art nav-link align-middle px-0">
                                        <i class="fa-solid fa-palette"></i> <span class="ms-1 d-none d-md-inline">Art Products</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2">
                                    <a href="artist.php?artist_comms" class="comms nav-link px-0 align-middle">
                                        <i class="fa-solid fa-brush"></i> <span class=" ms-1 d-none d-md-inline">Commissions</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2">
                                    <a href="artist.php?artist_dashboard" class="dashboard nav-link align-middle px-0">
                                        <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-md-inline">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2">
                                    <a href="#" class="settings nav-link align-middle px-0">
                                        <i class="fa-solid fa-gear"></i> <span class="ms-1 d-none d-md-inline">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
                <!-- content side -->
                <div class="col-auto p-0 content">
                    <!-- content -->
                    <div class="container-fluid">
                        <div class="row">
                            <?php 
                                if(isset($_GET['artist_comms'])){
                                    include('artist_comms.php'); ?>
                                    <style type="text/css">
                                        .art, .profile, .dashboard, .settings{
                                            color: white;
                                        }
                                        .comms {
                                            color: #b99467;
                                        }
                                    </style>
                                <?php
                                } elseif(isset($_GET['artist_art'])){
                                    include('artist_art.php'); ?>
                                    <style type="text/css">
                                        .profile, .dashboard, .settings, .comms {
                                            color: white;
                                        }
                                        .art {
                                            color: #b99467;
                                        }
                                    </style>
                                <?php
                                } elseif(isset($_GET['artist_dashboard'])){
                                    include('artist_dashboard.php'); ?>
                                    <style type="text/css">
                                        .profile, .art, .settings, .comms {
                                            color: white;
                                        }
                                        .dashboard {
                                            color: #b99467;
                                        }
                                    </style>
                                <?php
                                } else { ?>  
                                    <style type="text/css">
                                        .art, .dashboard, .settings, .comms {
                                            color: white;
                                        }
                                        .profile {
                                            color: #b99467;
                                        }
                                    </style>
                                    <?php
                                    echo '<div class="container-fluid">
                                    <div class="container row ms-4 p-0">
                                        <div class="card div-card profile-div mb-3" style="max-width: 1000px;">
                                            <div class="row g-0 p-4">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img src="../landing/img/contact-img2.jpg" width="150" height="150" class="rounded-circle profile-pic">
                                                </div>
                                                <div class="col-md-5 d-flex align-items-center">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text fs-5">Artist</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 d-flex align-items-center">
                                                    <div class="card-body">
                                                        <p class="d-flex justify-content-center fw-semibold m-0">8</p>
                                                        <p class="card-text d-flex justify-content-center">Completed Art</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 d-flex align-items-center">
                                                    <div class="card-body">
                                                        <p class="d-flex justify-content-center fw-semibold m-0">3</p>
                                                        <p class="card-text d-flex justify-content-center">Commissions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container row ms-4 mt-5 p-0">
                                        <span class="completed-art fw-semibold">Completed Art</span>
                                        <div class="card div-card mx-lg-2 my-3 p-0" style="max-width: 23rem;">
                                            <img src="../buy-img.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">City Buildings Digital Art Taipei</h5>
                                                <p class="d-flex justify-content-end price">₱3,450</p>
                                                <div class="card-text d-flex justify-content-between">
                                                    <span>For Chiaki Sato</span>
                                                    <p class="status d-flex justify-content-center ">CONTINUE</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card div-card mx-lg-2 my-3 p-0" style="max-width: 23rem;">
                                            <img src="../buy-img.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Untitled Commission</h5>
                                                <p class="d-flex justify-content-end price">₱3,450</p>
                                                <div class="card-text d-flex justify-content-between">
                                                    <span>For Chiaki Sato</span>
                                                    <p class="status d-flex justify-content-center ">CONTINUE</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card div-card mx-lg-2 my-3 p-0" style="max-width: 23rem;">
                                            <img src="../buy-img.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Beach and Skies in Pastel</h5>
                                                <p class="d-flex justify-content-end price">₱3,450</p>
                                                <div class="card-text d-flex justify-content-between">
                                                    <span>For Chiaki Sato</span>
                                                    <p class="status d-flex justify-content-center ">CONTINUE</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card div-card mx-lg-2 my-3 p-0" style="max-width: 23rem;">
                                            <img src="../buy-img.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">City Buildings Digital Art Taipei</h5>
                                                <p class="d-flex justify-content-end price">₱3,450</p>
                                                <div class="card-text d-flex justify-content-between">
                                                    <span>For Chiaki Sato</span>
                                                    <p class="status d-flex justify-content-center ">CONTINUE</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card div-card mx-lg-2 my-3 p-0" style="max-width: 23rem;">
                                            <img src="../buy-img.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Untitled Commission</h5>
                                                <p class="d-flex justify-content-end price">₱3,450</p>
                                                <div class="card-text d-flex justify-content-between">
                                                    <span>For Chiaki Sato</span>
                                                    <p class="status d-flex justify-content-center ">CONTINUE</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card div-card mx-lg-2 my-3 p-0" style="max-width: 23rem;">
                                            <img src="../buy-img.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Beach and Skies in Pastel</h5>
                                                <p class="d-flex justify-content-end price">₱3,450</p>
                                                <div class="card-text d-flex justify-content-between">
                                                    <span>For Chiaki Sato</span>
                                                    <p class="status d-flex justify-content-center ">CONTINUE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                } ?>
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