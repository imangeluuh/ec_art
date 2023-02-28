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
    <link rel="stylesheet" href="client.css">
    <!-- Google Fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@500&display=swap" rel="stylesheet">
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

        $tsql = "SP_GET_CLIENT ?";
        $params = array($_SESSION['userData']['username']);
        $stmt = sqlsrv_query($conn, $tsql, $params);
        if ( $stmt )  
        {  
            $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
            $client_username = $row['Username'];
            $client_id = $row['ClientID'];
            $client_name = $row['ClientFirstName'] . " " . $row['ClientLastName'];
            $client_photo = $row['ClientPhoto'];
            
        }   
        else   
        {  
            echo "Error in statement execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
        

    ?>
    <div class="container-fluid p-0">
        <div class="row">
            <!-- header  -->
            <div class="row d-flex justify-content-end p-0">
                <nav class="navbar navbar-expand position-fixed header">
                    <div class="container-fluid d-flex justify-content-end px-3">
                        <div class="col ms-5">
                            <form action="search.php" method="post" class="d-none d-lg-inline">
                                <div class="input-group d-flex align-items-center search-bar">
                                    <i class="fas fa-solid fa-magnifying-glass ms-3"></i>
                                    <input type="search" name="search" class="form-control border-0" placeholder="Search" aria-label="Search">
                                </div>
                            </form>
                        </div>
                        <div class="col d-flex align-items-center justify-content-end">
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../img/user-img/<?php echo $client_photo?>" alt="hugenerd" width="50" height="50" class="rounded-circle">
                                    <span class="d-none d-md-inline mx-2">
                                        <p class="d-flex justify-content-end fw-bold m-0 artist-name"><?php echo $client_name?></p>
                                        <p class="d-flex justify-content-end fw-semibold m-0 artist-role">Client</p>
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
                            </div>
                            <a href="client.php?checkout"type="button" class="btn"><i class="fa-solid fa-cart-shopping"></i></a>
                            <button type="button" class="btn"><i class="fa-regular fa-bell fw-light mx-1"></i></button>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container-fluid">
                <!-- sidebar -->
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 position-fixed sidebar ">
                    <div class="d-flex flex-column align-items-center align-items-sm-start min-vh-100">
                        <a href="#"></a>
                            <img src="../logo/logo-white.png" alt="logo" class="logo d-none d-md-inline mt-5 mx-4">
                            <img src="../logo/ec.png" alt="logo" class="sm-logo d-block d-md-none p-0 pt-3">
                        </a>
                        <div class="container d-flex justify-content-center mt-5">
                            <ul class="nav nav-pills flex-column mb-sm-auto m-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item py-2">
                                    <a href="client.php" class="home nav-link align-middle px-0">
                                        <i class="fa-solid fa-user"></i> <span class="ms-1 d-none d-md-inline">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2">
                                    <a href="client.php?client_art" class="p-art nav-link align-middle px-0">
                                        <i class="fa-solid fa-palette"></i> <span class="ms-1 d-none d-md-inline">Purchased Arts</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2">
                                    <a href="client.php?client_comms" class="comms nav-link px-0 align-middle">
                                        <i class="fa-solid fa-brush"></i> <span class="ms-1 d-none d-md-inline">Commissions</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
                <!-- content side-->
                <div class="col-auto p-0 content">
                    <!-- content -->
                    <div class="container-fluid ">
                        <div class="row">
                            <?php
                                if(isset($_GET['client_art'])){
                                    include('client_art.php'); ?>
                                    <style type="text/css">
                                        .p-art {
                                            color: #b99467;
                                        }
                                        .comms, .home, .settings, .dashboard, {
                                            color: white;
                                        }
                                </style>
                            <?php }elseif(isset($_GET['client_comms'])){
                                    include('client_comms.php'); ?>
                                    <style type="text/css">
                                        .comms {
                                            color: #b99467;
                                        }
                                        .home, .settings, .dashboard, .p-art {
                                            color: white;
                                        }
                                </style>
                                <?php } elseif(isset($_GET['client_dashboard'])){
                                    include('client_dashboard.php'); ?>
                                    <style type="text/css">
                                        .dashboard {
                                            color: #b99467;
                                        }
                                        .comms, .home, .settings, .p-art {
                                            color: white;
                                        }
                                    </style>
                                <?php } elseif(isset($_GET['checkout'])){
                                    include('checkout.php'); ?>
                                    <style type="text/css">
                                        .comms, .home, .settings, .p-art, .dashboard {
                                            color: white;
                                        }
                                    </style>
                                <?php } else { ?>
                                    <style type="text/css">
                                        .home {
                                            color: #b99467;
                                        }
                                    </style>
                                <?php echo "
                                <div class='row'>
                                    <div class='col d-flex flex-column align-items-center justify-content-center'>
                                        <span class='tagline'>CREATIVITY</span>
                                        <span class='tagline'>MEETS</span>
                                        <span class='tagline'>CONNECTIVITY</span>
                                        <span class='line'>A great selection at EC-ART.</span>
                                        <span class='line'>Fine art at your fingertips!</span>
                                    </div>
                                    <div class='col'>
                                        <div class='row container d-flex justify-content-center'>
                                            <img src='../landing/img/buy-img.jpg' alt='' class='home-product1 p-1'>
                                        </div>
                                        <div class='row container d-flex justify-content-center'>
                                            <img src='../landing/img/buy-img.jpg' alt='' class='home-product p-1'>
                                            <img src='../landing/img/buy-img.jpg' alt='' class='home-product p-1'>
                                            <img src='../landing/img/buy-img.jpg' alt='' class='home-product p-1'>
                                        </div>
                                    </div>
                                </div>
                                <div class='row p-0 d-none d-xl-inline'>
                                    <img src='img/black-eme.png' height='250' alt=''>
                                </div>

                                <div class='container row ms-4 p-0'>";
                                    getClientArtworks();
                            echo "</div>
                            </div>";
                            }
                            ?>
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

