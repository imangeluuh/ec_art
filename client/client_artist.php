<?php
    include('../functions/functions.php');

    // Start session 
    if(!session_id()){ 
        session_start(); 
    } 
        
    // Retrieve session data 
    $usertData = !empty($_SESSION['userData'])?$_SESSION['userData']:''; 
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
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn"><i class="fa-solid fa-cart-shopping"></i></button>
                            <button type="button" class="btn"><i class="fa-regular fa-bell fw-light mx-1"></i></button>
                        </div>
                    </div>
                </nav>
            </div>
            
            <div class="container-fluid row">
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
                                <li class="nav-item py-2">
                                    <a href="client.php?client_dashboard" class="nav-link align-middle px-0">
                                        <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-md-inline">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2">
                                    <a href="#" class="nav-link align-middle px-0">
                                        <i class="fa-solid fa-gear"></i> <span class="ms-1 d-none d-md-inline">Settings</span>
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
                                
                            ?>
                            <div class="container content-div row ms-5 mt-4 p-0">
                            <?php  

                                if(isset($_GET['comms_form'])){
                                    include('comms_form.php');
                                } elseif(isset($_GET['id'])) {
                                    $artist_id = $_GET['id'];
                                    $tsql = "SP_GET_ARTIST ?";
                                    $params = array($artist_id);
                                    $stmt = sqlsrv_query($conn, $tsql, $params);
                                    $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);

                                    // get artist's info
                                    $artist_name = $row['ArtistFirstName'] . " " . $row['ArtistLastName'];
                                    $artist_birthdate = $row['ArtistBirthdate'];
                                    $artist_photo = $row['ArtistPhoto'];
                                    $artist_username = $row['Username']; 
                                    
                                    
                                    ?>

                                    <!-- Artist's Info Card -->
                                    <div class="card div-card profile-div mb-3" style="max-width: 1000px;">
                                        <div class="row g-0 p-4">
                                            <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                <img src="../img/user-img/<?php echo !empty($artist_photo)?$artist_photo:"blank-profile.jpg"; ?>" width="150" height="150" class="rounded-circle profile-pic">
                                            </div>
                                            <div class="col-md-5 d-flex align-items-center">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $artist_name; ?></h5>
                                                    <p class="card-text fs-5">Artist</p>
                                                    <a href="client_artist.php?comms_form&id=<?php echo $artist_id; ?>" class="comms-form bg-secondary text-light text-decoration-none fw-semibold px-3 py-1 rounded-3">ART COMMISSION FORM</a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center">
                                                <div class="card-body">
                                                    <p class="d-flex justify-content-center fw-semibold m-0">1</p>
                                                    <p class="card-text d-flex justify-content-center">Completed Art</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center">
                                                <div class="card-body">
                                                    <p class="d-flex justify-content-center fw-semibold m-0">0</p>
                                                    <p class="card-text d-flex justify-content-center">Commissions</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        // display artist's artwork/s

                                        $tsql = "SP_LIST_ARTIST_ARTWORK  ?";
                                        $params = array($artist_id);
                                        $stmt = sqlsrv_query($conn, $tsql, $params);

                                        while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                                            $artwork_id = $row['ArtworkID'];
                                            $artwork_name = $row['ArtworkName'];
                                            $price = $row['Price'];
                                            $image = $row['Image'];
                                            $commissioned = $row['Commissioned'];
                                        ?>

                                        <div class="card div-card mx-lg-3 my-3 p-0" style="max-width: 23rem;">
                                            <img src="../img/art-img/<?php echo $image; ?>" class="card-img-top rounded-top-5" alt="$artwork_name">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $artwork_name; ?></h5>
                                                <span>by <?php echo $artist_name; ?></span>
                                                <p class="d-flex justify-content-end price">₱<?php echo $price; ?></p>
                                                <div class="card-text d-flex justify-content-end">
                                                    <button class="btn rounded-4 bg-secondary me-2"><i class="cart fa-solid fa-cart-shopping"></i></button>
                                                    <a href="client.php?checkout" class="status d-flex justify-content-center text-decoration-none">BUY NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } 
                                } ?>
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