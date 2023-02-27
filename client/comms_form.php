<div class="container">
    <div class="row top d-flex justify-content-center">
        <h1 class="text-center mb-3">Art Commission Form</h1>
        <hr>
        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-lg-12 col-xl-6 p-0">
                <form action="" method="post" enctype="multipart/form-data" >
                    <!-- Artwork Name field -->
                    <div class="form-outline row mb-3">
                        <input type="text" name="artname" id="artname" class="form-control-lg" placeholder="Desired Artwork Name" autocomplete="off" required="required">
                    </div>
                    <!-- Description field -->
                    <div class="form-outline row mb-3">
                        <textarea class="form-control rounded-3 border border-2 border-dark" name="description" placeholder="Artwork Description" rows="3"></textarea>
                    </div>
                    <!-- Price field -->
                    <div class="form-outline row mb-3">
                        <input type="text" name="price" id="price" class="form-control-lg" placeholder="Offered Amount" autocomplete="off" required="required">
                    </div>
                    <!-- Deadline field -->
                    <div class="row">
                        <div class="mb-3 p-0">
                            <label class="form-label mb-2">Desired Deadline of Art Commission</label>
                            <i class="fa-solid fa-circle-question"></i>
                            <input class="form-control border border-2 border-dark" type="date" id="deadline" name="deadline">
                        </div>
                    </div>
                    <!-- Mode of Payment -->
                    <label for="mop" class="form-label">Mode of Payment</label>
                    <div class="row d-flex justify-content-between mb-3">
                        <div class="col-3 d-flex justify-content-between align-items-center border border-2 border-dark rounded-3 p-2 px-3 me-2">
                            <label for="bank"><span class="ph">Bank</span></label>
                            <div class="form-check">
                                <input class="form-check-input border-dark-subtle position-static" type="radio" name="blankRadio" id="bank" value="option1" aria-label="...">
                            </div>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center border border-2 border-dark rounded-3 p-2 px-3 me-2">
                            <label for="Gcash"><span class="ph">Gcash</span></label>
                            <div class="form-check">
                                <input class="form-check-input border-dark-subtle position-static" type="radio" name="blankRadio" id="gcash" value="option1" aria-label="...">
                            </div>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center border border-2 border-dark rounded-3 p-2 px-3 me-2">
                            <label for="Maya"><span class="ph">Maya</span></label>
                            <div class="form-check">
                                <input class="form-check-input border-dark-subtle position-static" type="radio" name="blankRadio" id="maya" value="option1" aria-label="...">
                            </div>
                        </div>
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
    // if(isset($_POST['submit'])){
    //     $artwork_name = $_POST['artname'];
    //     $description = $_POST['description'];
    //     $price = $_POST['price'];
    //     $deadline = $_POST['deadline'];
        
    //     $tsql = "SP_ADD_C0MMS ?, ?, ?, ?, ?";
    //     $params=array($artwork_name, $_GET['id'], $price, ,1);



    // }
?>