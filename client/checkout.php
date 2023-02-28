<?php 
    // Start session 
		if(!session_id()){ 
		    session_start(); 
		} 
?>

<div class="container ms-3">
    <h1 class="text-center mb-3">Checkout</h1>
    <div class="row d-flex justify-content-center">
        <hr>
        <?php 
        if(isset($_GET['action'])){
        $action = $_GET['action'];
        if($action == 'add') {
            $artworkName = $_GET['artwork_name'];
            $artistName = $_GET['artist_name'];
            $image = $_GET['image'];
            $price = $_GET['price'];  

            $artwork = array('ArtworkName' => $artworkName
                                , 'ArtistName' => $artistName
                                , 'Image' => $image
                                , 'Price' =>$price);

            if(!empty($_SESSION['cart'])) {
                $artworks = array_column($_SESSION['cart'], 'artwork_name');
                if(!in_array($artworkName, $artworks)) {
                    $_SESSION['cart'][$artworkName] = $artwork;
                }
            }  else {
                $_SESSION['cart'][$artworkName] = $artwork;
            } 
        } ?>
        <div class="col-md-6 d-flex flex-column px-5">

            <?php
                 if(isset($_GET['artwork_name'])) {
                    $total = 0;
                foreach($_SESSION['cart'] as $key => $val) { 
                    $total = $total + $val['Price'] ?>
            
            <div class="card checkout-card my-3" style="max-width:600px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../img/art-img/<?php echo $val['Image']; ?>" class="last-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-center align-items-between ms-3 mt-3">
                            <h5 class="card-title"><?php  echo $val['ArtworkName']; ?></h5>
                            <p class="card-text">by <?php echo $val['ArtistName']?></p>
                            <p class="card-text fw-semibold ">₱<?php echo $val['Price']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            <hr>
            <div class="d-flex justify-content-between">
                <span class="fw-bold total-label">ORDER TOTAL</span>
                <span class="fw-semibold total-price">₱<?php echo $total; ?></span>
            </div>
            <br><br><br>
            <?php } 
            }?>
        </div>
        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
            <span class="fw-semibold mop-labeml mb-2">Mode of Payment</span>
            <div class="radio-div d-flex justify-content-between align-items-center border border-1 border-dark-subtle rounded-3 p-2 px-3 mb-2">
                <label for="bank"><span class="ph">Bank</span></label>
                <div class="form-check">
                    <input class="form-check-input border-dark-subtle position-static" type="radio" name="blankRadio" id="bank" value="bank" aria-label="...">
                </div>
            </div>
            <div class="radio-div d-flex justify-content-between align-items-center border border-1 border-dark-subtle rounded-3 p-2 px-3 mb-2">
                <label for="Gcash"><span class="ph">Gcash</span></label>
                <div class="form-check">
                    <input class="form-check-input border-dark-subtle position-static" type="radio" name="blankRadio" id="gcash" value="gcash" aria-label="...">
                </div>
            </div>
            <div class="radio-div d-flex justify-content-between align-items-center border border-1 border-dark-subtle rounded-3 p-2 px-3 mb-3">
                <label for="Maya"><span class="ph">Maya</span></label>
                <div class="form-check">
                    <input class="form-check-input border-dark-subtle position-static" type="radio" name="blankRadio" id="maya" value="maya" aria-label="...">
                </div>
            </div>
            <div class="row mt-2">
                <input type='submit' name='submit' value='CHECK OUT' class='btn fw-semibold rounded-4 p-2 next'>
            </div>
        </div>
    </div>
</div>
