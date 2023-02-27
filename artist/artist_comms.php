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
            $artwork_name = $row['ArtworkName'];
            $image = $row['Image'];
            $price = $row['Price']; ?>
            
            <div class="card div-card mx-lg-2 my-3 p-0" style="max-width: 23rem;">
                <img src="../img/art-img/<?php echo $image; ?>" class="card-img-top rounded-top-5" alt="$artwork_name">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $artwork_name; ?></h5>
                    <div class="card-text d-flex justify-content-between mt-5">
                        <span class="fw-semibold">₱<?php echo $price; ?></span>
                        <p class="status d-flex justify-content-center ">EDIT</p>
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