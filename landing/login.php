<?php
    // if(isset($_POST['login'])){
    //     header("Location: ../artist/artist.php");
    //     $username = $_POST['email'];
    //     $password = $_POST['password'];

    //     $tsql = "SP_FIND_USERNAME ?";

    //     // Assign value to param
    //     $param = array($username);

    //     // execute query
    //     $stmt = sqlsrv_query($conn, $tsql, $param);
    //     echo sqlsrv_num_rows($stmt);

    //     if(sqlsrv_num_rows($stmt) == 0){
    //         echo"alert('User Not Found. Pleas create an account first.')";
    //     } else {
    //         $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);

    //         if($row['Password'] == $password){
    //             if($row['RoleID'] == 2) {
    //                 header("Location: ../artist/artist.php");
    //                 exit;
    //             }
    //         }
    //     }
    // }
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
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="create.css">
    <!-- Google Fonts API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar fixed-top navbar-expand-lg header">
            <div class="container-fluid px-5 pt-3">
                <a href="#" class="navbar-brand me-5"><img src="../logo/logo.png" alt="EC-Art" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                        <li class="nav-item px-4">
                            <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="services.php">SERVICES</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row top d-flex justify-content-center">
                <h1 class="text-center mb-3">Login</h1>
                <hr>
                <div class="row d-flex justify-content-center align-items-center mt-3">
                    <div class="col-lg-12 col-xl-6 p-0">
                        <form action="" method="post" enctype="multipart/form-data" >
                            <!-- Username field -->
                            <div class="form-outline row mb-3">
                                <input type="text" name="username" id="username" class="form-control-lg" placeholder="Username" autocomplete="off" required="required">
                            </div>
                            <!-- Password field -->
                            <div class="form-outline row mb-3">
                                <input type="password" name="password" id="password" class="form-control-lg" placeholder="Password" autocomplete="off" required="required">
                            </div>
                            <!-- Submit button -->
                            <div class="text-center row">
                                <input type="submit" value="LOGIN" name="login" class="sign_up border-0 rounded-5 text-light fw-bold">
                            </div>
                        </form>
                        <div class="row mt-2">
                            <span class="fw-semibold">Don't have an account? <a href="create.php" class="signup">Sign up</a></span>
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