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
    <link rel="stylesheet" href="../client.css">
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

<div class="container">
    <div class="row top d-flex justify-content-center">
        <h1 class="text-center mb-3">Bank Payment</h1>
        <hr>
        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-lg-12 col-xl-6 p-0">
                <form action="bank_confirmation.php" method="post" enctype="multipart/form-data" >
                    <!-- Bank Name field -->
                    <div class="form-outline row mb-3">
                        <select name="bankname" id="bankname" class="form-control-lg">
                            <option value=""selected>Choose Bank</option>
                            <option value="BDO">BDO</option>
                            <option value="Metrobank">Metrobank</option>
                            <option value="BPI">BPI</option>
                        </select>
                    </div>
                    <!-- Account Holder field -->
                    <div class="form-outline row mb-3">
                        <input type="text" name="accountholder" id="accountholer" class="form-control-lg" placeholder="Account Holder" autocomplete="off" required="required">
                    </div>
                    <!-- Account No. field -->
                    <div class="form-outline row mb-3">
                        <input type="text" name="accountno" id="accountno" class="form-control-lg" placeholder="Account No." autocomplete="off" required="required">
                    </div>
                    <!-- Question field -->
                    <div class="form-outline row mb-3">
                        <div class="col-6 p-0">
                            <label class="form-label mb-2">Valid Thru</label>
                            <i class="fa-solid fa-circle-question"></i>
                        </div>
                        <div class="col-6 p-0">
                            <label class="form-label mb-2">Security Code</label>
                            <i class="fa-solid fa-circle-question"></i>
                        </div>
                    </div>
                    <!-- Input security field -->
                    <div class="form-outline row mb-3">
                        <div class="col-6 p-0">
                            <input type="text" name="expiry" id="expiry" class="form-control-lg" placeholder="MM/YY" autocomplete="off" required="required">
                        </div>
                        <div class="col-6 p-0">
                            <input type="text" name="security" id="security" class="form-control-lg" placeholder="CVV" autocomplete="off" required="required">
                        </div>
                    </div>
                    <!-- Price field -->
                    <div class="form-outline row mb-3">
                        <input type="text" name="price" id="price" class="form-control-lg" placeholder="Amount" autocomplete="off" required="required">
                    </div>
                    <!-- Submit Button -->
                    <div class="row d-flex justify-content-center">
                        <input type="submit" value="NEXT" name="next" class="next border-0 rounded-5 text-light fw-bold">
                    </div>
                </form>
                <br><br><br><br> <!-- pang extend lang hehe -->
            </div>
        </div>
    </div>
</div>


<?php