<?php
    include('../functions/functions.php');
?>

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
    <?php
        // Start session 
		if(!session_id()){ 
            session_start(); 
		} 
 

		// Retrieve session data 
		$userData = !empty($_SESSION['userData'])?$_SESSION['userData']:''; 

		// Include database configuration file 
		require_once '../database/dbConfig.php'; 

        $tsql = "SP_GET_ARTIST ?";
        $params = array($_SESSION['userData']['username']);
        $stmt = sqlsrv_query($conn, $tsql, $params);
        if ( $stmt )  
        {  
            $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
            $artist_username = $row['Username'];
            $artist_id = $row['ArtistID'];
            $artist_name = $row['ArtistFirstName'] . " " . $row['ArtistLastName'];
            $artist_photo = $row['ArtistPhoto'];
            
        }   
        else   
        {  
            echo "Error in statement execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  ?>
        
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
                                    <img src="../img/user-img/<?php echo $artist_photo; ?>" alt="" width="50" height="50" class="rounded-circle">
                                    <span class="d-none d-md-inline mx-2">
                                        <p class="d-flex justify-content-end fw-bold m-0 artist-name"><?php echo $artist_name; ?></p>
                                        <p class="d-flex justify-content-end fw-semibold m-0 artist-role">Artist</p>  
                                    </span>
                                    <i class="fa-solid fa-angle-down mx-2"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../landing/logout.php">Sign out</a></li>
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
                    </div>
                </div>
                <!-- content side -->
                <div class="col-auto p-0 content">
                    <!-- content -->
                    <div class="container-fluid">
                        <div class="row">
                        <div class="container content-div row ms-3 mt-4 p-0">
                        
                            <div class="row mx-2">
                                <?php

                                require_once '../database/dbconfig.php'; 

                                $tsql = "SP_LIST_COMMISSION ?";  
                                $params = array($artist_id);

                                $stmt = sqlsrv_query($conn, $tsql, $params);  

                                if ( $stmt )  
                                {  
                                    // Display products
                                    while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                                        $artwork_id = $row['ArtworkID'];
                                        $artwork_name = $row['ArtworkName'];
                                        $image = $row['Image'];
                                        $price = $row['Price']; ?>
                                        
                                        <div class="card div-card mx-lg-2 my-3 p-0" style="max-width: 23rem;">
                                            <img src="../img/art-img/<?php echo !empty($image)?$image:'loading.jpg'; ?>" class="card-img-top rounded-top-5" alt="$artwork_name">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $artwork_name; ?></h5>
                                                <div class="card-text d-flex justify-content-between mt-5">
                                                    <span class="fw-semibold">₱<?php echo $price; ?></span>
                                                    <a href="edit_comms.php?id=<?php echo $artwork_id; ?>" class="status text-decoration-none d-flex justify-content-center ">EDIT</a>
                                                </div>
                                            </div>
                                        </div>
                                <?php    }
                                }  
                                else   
                                {  
                                    echo "Error in statement execution.\n";  
                                    die( print_r( sqlsrv_errors(), true));  
                                }
                                ?>
                            </div>
                        </div>
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
