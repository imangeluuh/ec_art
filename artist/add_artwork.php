<div class="container">
    <div class="row top d-flex justify-content-center align-items-center">
        <h1 class="text-center mb-3">Add Artwork</h1>
        <hr>
        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-lg-12 col-xl-6 p-0">
                <form action="" method="post" enctype="multipart/form-data" >
                    <!-- Artwork Name field -->
                    <div class="form-outline row mb-3">
                        <input type="text" name="artname" id="artname" class="form-control-lg" placeholder="Artwork Name" autocomplete="off" required="required">
                    </div>
                    <!-- Price field -->
                    <div class="form-outline row mb-3">
                        <input type="text" name="price" id="price" class="form-control-lg" placeholder="Amount" autocomplete="off" required="required">
                    </div>
                    <!-- Photo field -->
                    <div class="row">
                        <div class="mb-3 p-0">
                            <label for="formFile" class="form-label mb-2">Artwork Photo</label>
                            <i class="fa-solid fa-circle-question"></i>
                            <input class="form-control border border-2 border-dark" type="file" class="form-control" name="photo">
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="row d-flex justify-content-center">
                        <input type="submit" value="ADD" name="submit" class="next border-0 rounded-5 text-light fw-bold">
                    </div>
                </form>
                <br><br><br><br> <!-- pang extend lang hehe -->
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){
        $artwork_name = $_POST['artname'];
        $price = $_POST['price'];
        $image = $_FILES['photo']['name'];
        $image_tmp = $_FILES['photo']['tmp_name'];
        move_uploaded_file($image_tmp,"../img/art-img/$image");

        $tsql = "SP_ADD_ARTWORK ?, ?, ?, ?, ?";
        $params=array($artwork_name, $artist_id, $price, $image, NULL);
        $stmt = sqlsrv_query($conn, $tsql, $params);
    }
?>