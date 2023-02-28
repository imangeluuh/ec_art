<div class="row mx-4">
    <?php
        $tsql = "SP_LIST_ARTIST_ART ?";  
        $param = array($artist_id);
        /* Execute the query. */  
        $stmt = sqlsrv_query($conn, $tsql, $param);  
        if ( $stmt )  
        {  
            // Display products
            while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $artwork_id = $row['ArtworkID'];
                $artwork_name = $row['ArtworkName'];
                $image = $row['Image'];
                $price = $row['Price'];
                $artist_name = $row['ArtistFirstName'] . " " . $row['ArtistLastName']; ?>
                
    <div class="card div-card mx-lg-2 my-3 p-0" style="max-width: 23rem;">
        <img src="../img/art-img/<?php echo $image; ?>" class="card-img-top rounded-top-5" alt="$artwork_name">
        <div class="card-body">
            <h5 class="card-title"><?php echo $artwork_name; ?></h5>
            <div class="card-text d-flex justify-content-between mt-5">
                <span class="fw-semibold">₱<?php echo $price; ?></span>
                <form action="" method="post">
                    <input type="submit" name="delete" class="btn bg-danger text-light fw-bold rounded-5 p-0 px-3 mb-2" value="DELETE">
                </form>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['delete']))

        $tsql = "SP_DELETE_ARTWORK ?"; 
        $params = array($artwork_id);
        $delete = sqlsrv_query($conn, $tsql, $params);   
     }
    } ?>
</div>

