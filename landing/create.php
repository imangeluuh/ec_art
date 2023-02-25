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
                <h1 class="text-center mb-3">Create Account</h1>
                <hr>
                <div class="row d-flex justify-content-center align-items-center mt-3">
                    <div class="col-lg-12 col-xl-6 p-0">
                        <form action="" method="post" enctype="multipart/form-data" >
                            <!-- Name field -->
                            <div class="form-outline row mb-3">
                                <div class="col-6 p-0">
                                    <input type="text" name="firstname" id="firstname" class="form-control-lg" placeholder="First Name" autocomplete="off" required="required">
                                </div>
                                <div class="col-6 d-flex justify-content-end p-0">
                                    <input type="text" name="lastname" id="lastname" class="form-control-lg" placeholder="Last Name" autocomplete="off" required="required">
                                </div>
                            </div>
                            <!-- Username field -->
                            <div class="form-outline row mb-3">
                                <input type="text" name="username" id="username" class="form-control-lg" placeholder="Username" autocomplete="off" required="required">
                            </div>
                            <!-- Email field -->
                            <div class="form-outline row mb-3">
                                <input type="text" name="email" id="email" class="form-control-lg" placeholder="Email" autocomplete="off" required="required">
                            </div>
                            <!-- Password field -->
                            <div class="form-outline row mb-3">
                                <input type="password" name="password" id="password" class="form-control-lg" placeholder="Password" autocomplete="off" required="required">
                            </div>
                            <!-- Confirm Password field -->
                            <div class="form-outline row mb-3">
                                <input type="password" name="cpassword" id="cpassword" class="form-control-lg" placeholder="Confirm Password" autocomplete="off" required="required">
                            </div>
                            <!-- Account field -->
                            <div class="form-outline mb-3">
                                <label for="account" class="form-label mb-2">Account for </label>
                                <i class="fa-solid fa-circle-question"></i>
                                <div class="row">
                                    <div class="radio-div col-5 d-flex justify-content-between align-items-center border border-2 border-dark rounded-3 p-2 px-3 me-5">
                                        <label for="artist"><span class="ph">Artist</span></label>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                                        </div>
                                    </div>
                                    <div class="radio-div col-6 d-flex justify-content-between align-items-center border border-2 border-dark rounded-3 p-2 px-3 ms-2">
                                        <label for="client"><span class="ph">Client/Buyer</span></label>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Birthday field -->
                            <div class="form-outline mb-3">
                                <label for="birthdate" class="form-label mb-2">Birthday</label>
                                <i class="fa-solid fa-circle-question"></i>
                                <div class="row">
                                    <div class="col-4 p-0 pe-2">
                                        <select class="form-select border border-2 border-dark d-flex align-items-center p-2">
                                            <option selected disabled>Month</option>
                                            <?php
                                                for($i = 1; $i <= 12; $i++) {
                                                    echo "<option value='$i'>$i</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-4 p-0 pe-1">
                                        <select class="form-select border border-2 border-dark d-flex align-items-center p-2">
                                            <option selected disabled>Day</option>
                                            <?php
                                                for($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-4 p-0 ps-1">
                                        <select class="form-select border border-2 border-dark d-flex align-items-center p-2">
                                            <option selected disabled>Year</option>
                                            <?php
                                                for($i = 2005; $i >= 1933; $i--) {
                                                    echo "<option value='$i'>$i</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Phone field -->
                            <div class="row mb-3">
                                <div class="input-group mt-2 p-0">
                                    <span class="input-group-text border border-2 border-dark" id="basic-addon1">+63</span>
                                    <input type="text" name="phone" id="phone" class="form-control border border-2 border-dark" placeholder="Phone Number" autocomplete="off" required="required">
                                </div>
                            </div>
                            <!-- Photo field -->
                            <div class="row">
                                <div class="mb-3 p-0">
                                    <label for="formFile" class="form-label mb-2">Display Photo</label>
                                    <i class="fa-solid fa-circle-question"></i>
                                    <input class="form-control border border-2 border-dark" type="file" id="formFile">
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="text-center row">
                                <input type="submit" value="SIGN UP" name="sign_up" class="sign_up border-0 rounded-5 text-light fw-bold">
                            </div>
                        </form>
                        <div class="row mt-2">
                            <span class="fw-semibold">Already have an account? <a href="login.php" class="login">Login</a></span>
                        </div>
                        <br><br><br><br> <!-- pang extend lang hehe -->
                    </div>
                </div>
            </div>
        </div>


        
    </div>


    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>