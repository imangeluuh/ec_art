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
    <link rel="stylesheet" href="style1.css">
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
    ?>

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
                            <a class="nav-link active-link" aria-current="page" href="index.php">HOME</a>
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
        <!-- second child -->

        <?php

        // if session is empty, prompt login 
        if(empty($userData)) // baka tanggalin
        echo"<div class='container p-0 login-container'>
            <div class='row px-4 top'>
                <div class='col-md-6 d-flex justify-content-center p-0'>
                    <img src='./img/logo-tagline.png' alt='ec-art' class='tagline'>
                </div>
                <div class='col-md-6 d-flex align-items-center p-0'>
                    <div class='container p-0'>
                        <div class='d-flex justify-content-center user-login'>
                            <form action='' method='post' class='login'>
                                <input type='text' class='form-control my-2' name='username' id='username' placeholder='Username' required='required' autocomplete='off'>
                                <input type='password' class='form-control my-2' name='password' id='password' placeholder='Password' required='required' autocomplete='off'>
                                <input type='submit' name='login' value='LOG IN' class='btn fw-semibold mt-1 login-btn'>
                            </form>
                        </div>
                        <div class='d-flex justify-content-center mt-2'>
                            <a href='#' class='text-decoration-underline fw-semibold reset-password'>Forgot Password?</a>
                        </div>
                        <div class='d-flex justify-content-center'>
                            <hr>
                        </div>
                        <div class='d-flex justify-content-center mb-2'>
                            <a href='create.php' class='btn btn-dark fw-semibold create-btn'>CREATE NEW ACCOUNT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>"

        ?>

        <div class="container d-flex justify-content-center">
        <div class="row top products">
            <div class="col-lg-12 p-0">
                <div class="row mx-lg-5">
                    <?php 
                        // call function to display products
                        getLandingArtwork();
                    ?>
                </div>
            </div>
        </div>
        </div>
    </div>


    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>

<?php 
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        userLogin($username, $password);
    } 
?>